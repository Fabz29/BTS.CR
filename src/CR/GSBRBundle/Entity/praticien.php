<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * praticien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\praticienRepository")
 */
class praticien {

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
     * @ORM\Column(name="nomMedecin", type="string", length=25)
     */
    private $nomMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMedecin", type="string", length=30)
     */
    private $prenomMedecin;

    /**
     * @var string
     * 
     * @ORM\Column(name="adresseMedecin", type="string", length=50)
     */
    private $adresseMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="cpMedecin", type="string", length=5)
     */
    private $cpMedecin;

    /**
     * @var string
     *
     * @ORM\Column(name="villeMedecin", type="string", length=25)
     */
    private $villeMedecin;

    /**
     * @var float
     *
     * @ORM\Column(name="coefNotoriete", type="float")
     */
    private $coefNotoriete;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CR\GSBRBundle\Entity\typePraticien")
     */
    private $typeMedecin;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomMedecin
     *
     * @param string $nomMedecin
     * @return praticien
     */
    public function setNomMedecin($nomMedecin) {
        $this->nomMedecin = $nomMedecin;

        return $this;
    }

    /**
     * Get nomMedecin
     *
     * @return string 
     */
    public function getNomMedecin() {
        return $this->nomMedecin;
    }

    /**
     * Set prenomMedecin
     *
     * @param string $prenomMedecin
     * @return praticien
     */
    public function setPrenomMedecin($prenomMedecin) {
        $this->prenomMedecin = $prenomMedecin;

        return $this;
    }

    /**
     * Get prenomMedecin
     *
     * @return string 
     */
    public function getPrenomMedecin() {
        return $this->prenomMedecin;
    }

    /**
     * Set cpMedecin
     *
     * @param string $cpMedecin
     * @return praticien
     */
    public function setCpMedecin($cpMedecin) {
        $this->cpMedecin = $cpMedecin;

        return $this;
    }

    /**
     * Get cpMedecin
     *
     * @return string 
     */
    public function getCpMedecin() {
        return $this->cpMedecin;
    }

    /**
     * Set villeMedecin
     *
     * @param string $villeMedecin
     * @return praticien
     */
    public function setVilleMedecin($villeMedecin) {
        $this->villeMedecin = $villeMedecin;

        return $this;
    }

    /**
     * Get villeMedecin
     *
     * @return string 
     */
    public function getVilleMedecin() {
        return $this->villeMedecin;
    }

    /**
     * Set coefNotoriete
     *
     * @param float $coefNotoriete
     * @return praticien
     */
    public function setCoefNotoriete($coefNotoriete) {
        $this->coefNotoriete = $coefNotoriete;

        return $this;
    }

    /**
     * Get coefNotoriete
     *
     * @return float 
     */
    public function getCoefNotoriete() {
        return $this->coefNotoriete;
    }

    /**
     * Set typeMedecin
     *
     * @param \CR\GSBRBundle\Entity\typePraticien $typeMedecin
     * @return praticien
     */
    public function setTypeMedecin(\CR\GSBRBundle\Entity\typePraticien $typeMedecin = null) {
        $this->typeMedecin = $typeMedecin;

        return $this;
    }

    /**
     * Get typeMedecin
     *
     * @return \CR\GSBRBundle\Entity\typePraticien 
     */
    public function getTypeMedecin() {
        return $this->typeMedecin;
    }

    /**
     * Set adresseMedecin
     *
     * @param string $adresseMedecin
     * @return praticien
     */
    public function setAdresseMedecin($adresseMedecin) {
        $this->adresseMedecin = $adresseMedecin;

        return $this;
    }

    /**
     * Get adresseMedecin
     *
     * @return string 
     */
    public function getAdresseMedecin() {
        return $this->adresseMedecin;
    }

    /**
     * Get NomPrenom
     *
     * @return string 
     */
    public function getPrenomNom() {
        return $this->getPrenomMedecin() . ' ' . $this->getNomMedecin();
    }

}
