<?php

namespace App\Controller;
/**
 * authenticated users will only be able to see all this stuff
 * it will redirect anyone back to the form if they try this
 * todo: login needs to be hidden if possible unless they're on the hg wifi or just sepearete this into another web app
 */

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{

    #[Route('/patient/search', name: 'app_patient_search')]
    public function index(): Response
    {
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
        ]);
    }


    #[Route('/patient/search/{id}', name: 'app_patient_delete ')]
    public function deletePatient(int $id)
    {

    }


    #[Route('/patient/home', name: 'app_home')]
    public function home()
    {

    }
}
