<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtistasController
 *
 * @author hds
 */

namespace ALBEIRO\PartiturasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ALBEIRO\PartiturasBundle\Entity\Artistas;

class ArtistasController extends Controller{
   
    public function agregarArtistasAction() {
        $artista = new Artistas();
        $artista->setCodArtista('ART3');
        $artista->setNombre('GRUPO GALE');        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($artista);
        $em->flush();
        return $this->render('ALBEIROPartiturasBundle:Artistas:artistas.html.twig');
    }
}

?>
