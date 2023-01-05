<?php
/*
 * will only be used for forms nothing else ok
 */

namespace App\Controller;
use App\Entity\Patient;
use App\Entity\TravelForm;
use App\Form\TravelFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $travelForm = $this->createForm(TravelFormType::class);
        $travelForm->handleRequest($request);
        $entityManager = $doctrine->getManager();
        if($travelForm->isSubmitted() && $travelForm->isValid())
        {
            /**
             * need to convert travelForm data from array to string as the user can have text box ticked and then
             * add extra information if needed.
             * todo:record vaccine history too
             */
            //dump($travelForm->getData());
            $patientTravelForm  = new TravelForm();
            try
            {
                $patientTravelForm->setData($travelForm->getData()["travelForm"],"textField");
                $patientTravelForm->setData($travelForm->getData()["vaccineHistory"],"date");
                $patientTravelForm->setWomenQuestions($travelForm->getData()["womenQuestions"]);
                $patient = $travelForm->getData()["patientForm"];
                $patient->setTravelForm($patientTravelForm);
                dump($patient);
                //add to databse

            }catch(\Exception $e)
            {
                //redirect them to an error page
                //todo: send an error log
                $this->redirectToRoute("app_form_error");
            }

        }
        return $this->render('form/index.html.twig', [
            "form" => $travelForm,
        ]);
    }

    #[Route('/form/submitted', name: 'app_form_submitted')]
    public function confirmedSubmission()
    {
        return $this->render('form/index.html.twig', [
        ]);
    }

    #[Route('/form/submitted', name: 'app_form_error')]
    public function errorSubmitting()
    {
        return $this->render("form/error.html.twig",[

        ]);
    }
}
