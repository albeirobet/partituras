<?php

namespace ALBEIRO\PartiturasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ALBEIROPartiturasBundle:Base:index.html.twig');
    }
}
