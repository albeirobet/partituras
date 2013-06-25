<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GenerosController
 *
 * @author hds
 */

namespace ALBEIRO\PartiturasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ALBEIRO\PartiturasBundle\Entity\Generos;

class GenerosController extends Controller {

    public function generosAction($name) {
        return $this->render('ALBEIROPartiturasBundle:Default:index.html.twig', array('name' => $name));
    }

    public function agregarGenerosAction() {
        $genero = new Generos();
        $genero->setCodGenero('GEN6');
        $genero->setNombre('VARIOS');
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($genero);
        $em->flush();
        return $this->render('ALBEIROPartiturasBundle:Generos:generos.html.twig');
    }

}

?>
