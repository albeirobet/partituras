<?php

namespace ALBEIRO\PartiturasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ALBEIRO\PartiturasBundle\Entity\GenerosRepository")
 */
class Generos {

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
     * @ORM\Column(name="cod_genero", type="string", length=255)
     */
    private $codGenero;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codGenero
     *
     * @param string $codGenero
     * @return Generos
     */
    public function setCodGenero($codGenero) {
        $this->codGenero = $codGenero;

        return $this;
    }

    /**
     * Get codGenero
     *
     * @return string 
     */
    public function getCodGenero() {
        return $this->codGenero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Generos
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * @ORM\OneToMany(targetEntity="Partituras", mappedBy="Generos")
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
