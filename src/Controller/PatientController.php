<?php

namespace App\Controller;
/**
 * authenticated users will only be able to see all this stuff
 * it will redirect anyone back to the form if they try this
 */

use App\Entity\Patient;
use App\Form\PatientFormType;
use App\Form\PatientSearchType;
use Doctrine\DBAL\Types\DateType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function PHPUnit\Framework\matches;

class PatientController extends AbstractController
{

    #[Route('/search', name: 'app_patient_search')]
    public function index(): Response
    {
        //todo: live search maybe, learn react probs for this normal ajax will be ball ache
        $patient = new Patient();
        $form = $this->createForm(PatientSearchType::class,$patient,
            [
                "action" => $this->generateUrl("app_get_patient"),
                "method" => "GET"
            ]
        );
        return $this->render('patient/index.html.twig', [
            "form" => $form
        ]);
    }


    #[Route('/patient/get/', name: 'app_get_patient')]
    public function patientDetails(Request $request,ManagerRegistry $doctrine)
    {
        //$query = $request->query->all()["patient_search"]["searchQuery"];
        $query = "22/12/2022,bag";
        //inputbags wtf why didnt they just return a array
        $reg = "/,?[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9]/";
        $patients=null;
        try
        {
            if(preg_match($reg,$query,$matches)) {
                if (count($matches) < 1) {
                    throw new \Exception("too many dates entered, or dob entered before name");
                }else
                {
                    //need to check if only dob was entered or dob with some characters
                    if(str_contains($query,","))
                    {
                        //dump($query);
                        $fullNameDOB = explode(",",$query);

                        if(preg_match("/[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9],/",$query))
                        {
                            //checking if the user put the dob first just incase
                            $names = explode(" ",$fullNameDOB[1]);
                            $dob = $fullNameDOB[0];
                            //dump($dob,$names);
                        }else//comma before dob
                        {
                            dump($fullNameDOB);
                            $names = explode(" ",$fullNameDOB[0]);
                            $dob = $fullNameDOB[1];

                        }
                        //dump("wtf",$names);
//
//                        $patients = $doctrine->getRepository(Patient::class)->searchPatientWithDOB
//                        (
//                            $names,
//                            $dob
//                        );

                        //$patients = $doctrine->getRepository(Patient::class)->f($names);
                        //$dob = new \DateTime(str_replace("/","-",$dob));
                        // PHP considers / to mean m/d/Y and - to mean d-m-y, how was i supposed to know that wtf 2 hours gone

                        $patients = $doctrine->getRepository(Patient::class)->searchPatientWithDOB($names,$dob);
                    }else
                    {
                        $query = str_replace("/","-",$query);
                        $date = new \DateTime($query);
                        $patients = $doctrine->getRepository(Patient::class)->findBy(
                            [
                                "dob" => $date
                            ]
                        );
                    }
                }
            }else//no dob was entered
            {
                dump("no reg match",$query);

            }
        }catch(\Exception $e)
        {

        }

        //doctrine should be doing lazy loading here so we good
        return $this->render('patient/list.html.twig', [
                "patients" => $patients,
        ]);
    }



    #[Route('/patient/delete/{id}', name: 'app_patient_delete ')]
    public function deletePatient(int $id)
    {

    }



    #[Route('/patient/home', name: 'app_home')]
    public function home()
    {

    }
}
