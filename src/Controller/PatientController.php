<?php

namespace App\Controller;
/**
 * authenticated users will only be able to see all this stuff
 * it will redirect anyone back to the form if they try this
 */

use App\Entity\Patient;
use App\Form\TravelFormType;
use App\Form\PatientSearchType;
use Doctrine\DBAL\Types\DateType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PatientController extends AbstractController
{

    #[Route('/patient/search', name: 'app_patient_search')]
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


    /**
     * gets the results from the query
     * @param Request $request
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    #[Route('/patient/get/', name: 'app_get_patient')]
    public function patientResults(Request $request,ManagerRegistry $doctrine)
    {
        $query = $request->query->all()["patient_search"]["searchQuery"];
        //inputbags wtf why didnt they just return a array
        $reg = "/,?[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9]/";

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
                        $fullNameDOB = explode(",",$query);
                        if(preg_match("/[0-9][0-9]\/[0-9][0-9]\/[0-9][0-9][0-9][0-9],/",$query))
                        {
                            //checking if the user put the dob first just incase
                            $names = explode(" ",$fullNameDOB[1]);
                            $dob = $fullNameDOB[0];

                        }else//comma before dob
                        {
                            //dump($fullNameDOB);
                            $names = explode(" ",$fullNameDOB[0]);
                            $dob = $fullNameDOB[1];

                        }
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
                //dump("no reg match", $query);
                if(str_contains($query," "))
                {
                    $query = explode(" ",$query);//surname,firstname
                }
                $patients = $doctrine->getRepository(Patient::class)->searchPatient($query);
            }
        }catch(\Exception $e)
        {
            $patients = null;
        }
        //doctrine should be doing lazy loading here so we good
        return $this->render('patient/list.html.twig', [
            "patients" => $patients,
        ]);

    }

    /**
     * create view to see the details of the patient and do a consultation
     *
     * @return void
     */
    #[Route('/patient/details/{id}', name: 'app_patient_details')]
    public function patientDetails(int $id,ManagerRegistry $doctrine): Response
    {
        $travelForm = $this->createForm(TravelFormType::class);//so that you can edit the patient's form
        $patient = $doctrine->getRepository(Patient::class)->find($id);
        dump($patient->getTravelForm()->getResults());
        return $this->render('patient/details.html.twig', [
            "patient" => $patient,
            "form" => $travelForm,

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
