<?php
/*
 * will only be used for forms nothing else ok
 */

namespace App\Controller;
use App\Entity\Patient;
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
        $patient = new Patient();
        $travelForm = $this->createForm(TravelFormType::class );
        $travelForm->handleRequest($request);
        $entityManager = $doctrine->getManager();
        if($travelForm->isSubmitted() && $travelForm->isValid())
        {

            /**
             * need to convert travelForm data from array to string as the user can have text box ticked and then
             * add extra information if needed.
             * todo:record vaccine history too
             */
            dump($travelForm->getData());

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




    private function travelFormProcess()
    {

    }
}
