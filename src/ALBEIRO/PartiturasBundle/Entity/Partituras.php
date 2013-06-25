<?php

namespace ALBEIRO\PartiturasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ALBEIRO\PartiturasBundle\Entity\Generos;


/**
 * Partituras
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ALBEIRO\PartiturasBundle\Entity\PartiturasRepository")
 */
class Partituras {

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
     * @ORM\Column(name="cod_partitura", type="string", length=255)
     */
    private $codPartitura;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=500)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="link_descarga", type="string", length=1000)
     */
    private $linkDescarga;
    
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="agregado", type="date")
     */
    private $agregado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codPartitura
     *
     * @param string $codPartitura
     * @return Partituras
     */
    public function setCodPartitura($codPartitura) {
        $this->codPartitura = $codPartitura;

        return $this;
    }

    /**
     * Get codPartitura
     *
     * @return string 
     */
    public function getCodPartitura() {
        return $this->codPartitura;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Partituras
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo() {
        return $this->titulo;
    }

   
    /**
     * Set linkDescarga
     *
     * @param string $linkDescarga
     * @return Partituras
     */
    public function setLinkDescarga($linkDescarga) {
        $this->linkDescarga = $linkDescarga;

        return $this;
    }

    /**
     * Get linkDescarga
     *
     * @return string 
     */
    public function getLinkDescarga() {
        return $this->linkDescarga;
    }
    
    
    /**
     * Set agregado
     *
     * @param \DateTime $agregado
     * @return Partituras
     */
    public function setAgregado($agregado)
    {
        $this->agregado = $agregado;

        return $this;
    }

    /**
     * Get agregado
     *
     * @return \DateTime 
     */
    public function getAgregado()
    {
        return $this->agregado;
    }
    

    
    //Configurando la llave foranea hacia los generos, donde una partitura
    //puede pertenecer solo a un genero, pero un genero puede tener muchas partituras.
    /**
     * @ORM\ManyToOne(targetEntity="Generos", inversedBy="Partituras")
     * @ORM\JoinColumn(name="id_genero", referencedColumnName="id")
     * @return integer
     */
    private $genero;

    public function setGenero(\ALBEIRO\PartiturasBundle\Entity\Generos $genero) {
        $this->genero = $genero;
    }

    public function getGenero() {
        return $this->genero;
    }
    
    
     //Configurando la llave foranea hacia los artistas, donde una partitura
    //puede pertenecer solo a un artista, pero un artista puede tener muchas partituras.
    /**
     * @ORM\ManyToOne(targetEntity="Artistas", inversedBy="Partituras")
     * @ORM\JoinColumn(name="id_artista", referencedColumnName="id")
     * @return integer
     */
    private $artista;

    public function setArtista(\ALBEIRO\PartiturasBundle\Entity\Artistas $artista) {
        $this->artista = $artista;
    }

    public function getArtista() {
        return $this->artista;
    }

}
