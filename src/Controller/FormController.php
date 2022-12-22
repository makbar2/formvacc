<?php
/*
 * will only be used for forms nothing else ok
 */

namespace App\Controller;
use App\Entity\Patient;
use App\Form\PatientFormType;
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
        $patientForm = $this->createForm(PatientFormType::class,$patient);
        $patientForm->handleRequest($request);
        $entityManager = $doctrine->getManager();
        if($patientForm->isSubmitted() && $patientForm->isValid())
        {
            $patient = $patientForm->getData();
            dump($patient->getDob());
            //$entityManager->persist($patient);
            //$entityManager->flush();
            $this->redirectToRoute("app_form_submitted");
        }
        return $this->render('form/index.html.twig', [
            "patientForm" => $patientForm,
        ]);
    }

    #[Route('/form/submitted', name: 'app_form_submitted')]
    public function confirmedSubmission()
    {
        return $this->render('form/index.html.twig', [
        ]);
    }

}
