<?php

namespace DlaIstudent\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('DlaIstudentWelcomeBundle:Welcome:index.html.twig');
    }
}
