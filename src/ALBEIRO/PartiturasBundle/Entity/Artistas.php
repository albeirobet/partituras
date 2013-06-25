<?php

namespace ALBEIRO\PartiturasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artistas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ALBEIRO\PartiturasBundle\Entity\ArtistasRepository")
 */
class Artistas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_artista", type="string", length=255)
     */
    private $codArtista;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=500)
     */
    private $nombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codArtista
     *
     * @param string $codArtista
     * @return Artistas
     */
    public function setCodArtista($codArtista)
    {
        $this->codArtista = $codArtista;

        return $this;
    }

    /**
     * Get codArtista
     *
     * @return string 
     */
    public function getCodArtista()
    {
        return $this->codArtista;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Artistas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
     /**
     * @ORM\OneToMany(targetEntity="Partituras", mappedBy="Artistas")
     */
    private $partituras;

    public function __construct() {
        $this->partituras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addPartituras(\ALBEIRO\PartiturasBundle\Entity\Partituras $partituras) {
        $this->partituras[] = $partituras;
    }

    public function getPartituras() {
        return $this->partituras;
    }
    
}
