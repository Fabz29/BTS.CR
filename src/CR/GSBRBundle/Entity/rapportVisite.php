<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * rapportVisite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\rapportVisiteRepository")
 */
class rapportVisite {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRapport", type="datetime")
     */
    private $dateRapport;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="string", length=255)
     */
    private $bilan;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CR\GSBRBundle\Entity\visiteur")
     */
    private $visiteur;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="CR\GSBRBundle\Entity\praticien")
     */
    private $medecin;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateRapport
     *
     * @param \DateTime $dateRapport
     * @return rapportVisite
     */
    public function setDateRapport($dateRapport) {
        $this->dateRapport = $dateRapport;

        return $this;
    }

    /**
     * Get dateRapport
     *
     * @return \DateTime 
     */
    public function getDateRapport() {
        return $this->dateRapport;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return rapportVisite
     */
    public function setBilan($bilan) {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan() {
        return $this->bilan;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return rapportVisite
     */
    public function setMotif($motif) {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Set visiteur
     *
     * @param \CR\GSBRBundle\Entity\visiteur $visiteur
     * @return rapportVisite
     */
    public function setVisiteur(\CR\GSBRBundle\Entity\visiteur $visiteur = null) {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return \CR\GSBRBundle\Entity\visiteur 
     */
    public function getVisiteur() {
        return $this->visiteur;
    }

    /**
     * Set medecin
     *
     * @param \CR\GSBRBundle\Entity\praticien $medecin
     * @return rapportVisite
     */
    public function setMedecin(\CR\GSBRBundle\Entity\praticien $medecin = null) {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \CR\GSBRBundle\Entity\praticien 
     */
    public function getMedecin() {
        return $this->medecin;
    }

    public function __construct() {
        $this->dateRapport = new \Datetime();
    }

    /**
     * @Assert\Callback
     */
    public function isMotifValid(ExecutionContextInterface $context) {
        $forbiddenWords = array('pute', 'putain', 'merde', 'con', 'crétin', 'enculé');

        // On vérifie que le contenu ne contient pas l'un des mots
        if (preg_match('#' . implode('|', $forbiddenWords) . '#', $this->getMotif())) {
            // La règle est violée, on définit l'erreur
            $context
                    ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
                    ->atPath('motif')                                                   // attribut de l'objet qui est violé
                    ->addViolation() // ceci déclenche l'erreur
            ;
        }
    }

    /**
     * @Assert\Callback
     */
    public function isBilanValid(ExecutionContextInterface $context) {
        $forbiddenWords = array('pute', 'putain', 'merde', 'con', 'crétin', 'enculé');

        // On vérifie que le contenu ne contient pas l'un des mots
        if (preg_match('#' . implode('|', $forbiddenWords) . '#', $this->getBilan())) {
            // La règle est violée, on définit l'erreur
            $context
                    ->buildViolation('Contenu invalide car il contient un mot interdit.') // message                                                 // attribut de l'objet qui est violé
                    ->atPath('bilan')
                    ->addViolation() // ceci déclenche l'erreur
            ;
        }
    }

}
