<?php

namespace HeticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentControllerController extends Controller
{
    /**
     * @Route("/student/")
     */
    public function indexAction()
    {
        $repo = $this->getDoctrine()
            ->getRepository('HeticBundle:Student');
        $bullshit = $repo->findAllStudentByDate();
        dump($bullshit);
        die();
        return $this->render('HeticBundle:Student:index.html.twig', [
            'request' => $request
        ]);
    }

}
