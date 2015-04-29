<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * medicament
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\medicamentRepository")
 */
class medicament {

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
     * @ORM\Column(name="depotLegal", type="string", length=10)
     */
    private $depotLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCommercial", type="string", length=25)
     */
    private $nomCommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="composition", type="string", length=255)
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="effets", type="string", length=255)
     */
    private $effets;

    /**
     * @var string
     *
     * @ORM\Column(name="contreIndication", type="string", length=255)
     */
    private $contreIndication;

    /**
     * @var float
     *
     * @ORM\Column(name="prixEchantillon", type="float")
     */
    private $prixEchantillon;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CR\GSBRBundle\Entity\famille", cascade={"persist"})
     */
    private $famille;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set depotLegal
     *
     * @param string $depotLegal
     * @return medicament
     */
    public function setDepotLegal($depotLegal) {
        $this->depotLegal = $depotLegal;

        return $this;
    }

    /**
     * Get depotLegal
     *
     * @return string 
     */
    public function getDepotLegal() {
        return $this->depotLegal;
    }

    /**
     * Set nomCommercial
     *
     * @param string $nomCommercial
     * @return medicament
     */
    public function setNomCommercial($nomCommercial) {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    /**
     * Get nomCommercial
     *
     * @return string 
     */
    public function getNomCommercial() {
        return $this->nomCommercial;
    }

    /**
     * Set composition
     *
     * @param string $composition
     * @return medicament
     */
    public function setComposition($composition) {
        $this->composition = $composition;

        return $this;
    }

    /**
     * Get composition
     *
     * @return string 
     */
    public function getComposition() {
        return $this->composition;
    }

    /**
     * Set effets
     *
     * @param string $effets
     * @return medicament
     */
    public function setEffets($effets) {
        $this->effets = $effets;

        return $this;
    }

    /**
     * Get effets
     *
     * @return string 
     */
    public function getEffets() {
        return $this->effets;
    }

    /**
     * Set contreIndication
     *
     * @param string $contreIndication
     * @return medicament
     */
    public function setContreIndication($contreIndication) {
        $this->contreIndication = $contreIndication;

        return $this;
    }

    /**
     * Get contreIndication
     *
     * @return string 
     */
    public function getContreIndication() {
        return $this->contreIndication;
    }

    /**
     * Set prixEchantillon
     *
     * @param float $prixEchantillon
     * @return medicament
     */
    public function setPrixEchantillon($prixEchantillon) {
        $this->prixEchantillon = $prixEchantillon;

        return $this;
    }

    /**
     * Get prixEchantillon
     *
     * @return float 
     */
    public function getPrixEchantillon() {
        return $this->prixEchantillon;
    }

    /**
     * Set famille
     *
     * @param \CR\GSBRBundle\Entity\famille $famille
     * @return medicament
     */
    public function setFamille(\CR\GSBRBundle\Entity\famille $famille = null) {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return \CR\GSBRBundle\Entity\famille 
     */
    public function getFamille() {
        return $this->famille;
    }

}
