<?php

namespace Bootcamp\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BootcampJobeetBundle:Default:index.html.twig', array());
    }
}
