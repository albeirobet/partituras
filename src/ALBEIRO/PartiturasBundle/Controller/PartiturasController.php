<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PartiturasController
 *
 * @author hds
 */

namespace ALBEIRO\PartiturasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ALBEIRO\PartiturasBundle\Entity\Partituras;

class PartiturasController extends Controller{
    

    
    public function agregarPartiturasAction(){
        $partitura = new Partituras();
        $obteniendoGenero = $this->getDoctrine()->getEntityManager();
        $genero = $obteniendoGenero->getRepository('ALBEIROPartiturasBundle:Generos')->find(3);
        $obteniendoArtista = $this->getDoctrine()->getEntityManager();
        $artista = $obteniendoArtista->getRepository('ALBEIROPartiturasBundle:Artistas')->find(7);
        $partitura->setCodPartitura('PAR9');
        $partitura->setGenero($genero);
        $partitura->setTitulo('FIESTA');
        $partitura->setArtista($artista);
        $partitura->setLinkDescarga('http://www.mediafire.com/JJJJUUUUU');
        $partitura->setAgregado(new \DateTime());
         $em = $this->getDoctrine()->getEntityManager();
        $em->persist($partitura);
        $em->flush();
        return $this->render('ALBEIROPartiturasBundle:Partituras:partituras.html.twig');
        
      
    }
    
    
}

?>
