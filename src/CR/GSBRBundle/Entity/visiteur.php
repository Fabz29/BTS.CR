<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * visiteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\visiteurRepository")
 * @UniqueEntity(fields="login", message="Un login similaire existe déjà.")
 */
class visiteur implements UserInterface {

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
     * @ORM\Column(name="idGSB", type="string", length=4)
     */
    private $idGSB;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30)
     * @Assert\Length(min=2, max=30, minMessage="Le nom doit faire au moins {{ limit }} caractères.", maxMessage="Le nom doit faire moins de {{ limit }} caractères.")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30)
     * @Assert\Length(min=2, max=30, minMessage="Le prénom doit faire au moins {{ limit }} caractères.", maxMessage="Le prénom doit faire moins de {{ limit }} caractères.")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20)
     * @Assert\Length(min=2, max=20, minMessage="Le login doit faire au moins {{ limit }} caractères.", maxMessage="Le login doit faire moins de {{ limit }} caractères.")
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=20)
     * @Assert\Length(min=5, max=20, minMessage="Le mot de passe doit faire au moins {{ limit }} caractères.", maxMessage="Le mot de passe doit faire moins de {{ limit }} caractères.")
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=30)
     * @Assert\Length(min=5, max=30, minMessage="L'adresse doit faire au moins {{ limit }} caractères.", maxMessage="L'adresse doit faire moins de {{ limit }} caractères.")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     * @Assert\Length(min=5, max=5, minMessage="Le code postale doit faire {{ limit }} caractères.", maxMessage="Le code postale doit faire {{ limit }} caractères.")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30)
     * @Assert\Length(min=2, max=30, minMessage="Le nom de ma ville doit faire au moins {{ limit }} caractères.", maxMessage="Le nom de la ville doit faire moins de {{ limit }} caractères.")
     */
    private $ville;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmbauche", type="datetime")
     * @Assert\DateTime()
     */
    private $dateEmbauche;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idGSB
     *
     * @param string $idGSB
     * @return visiteur
     */
    public function setIdGSB($idGSB) {
        $this->idGSB = $idGSB;

        return $this;
    }

    /**
     * Get idGSB
     *
     * @return string 
     */
    public function getIdGSB() {
        return $this->idGSB;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return visiteur
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return visiteur
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return visiteur
     */
    public function setUsername($login) {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getUsername() {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return visiteur
     */
    public function setPassword($mdp) {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->mdp;
    }
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return visiteur
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return visiteur
     */
    public function setCp($cp) {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp() {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return visiteur
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     * @return visiteur
     */
    public function setDateEmbauche($dateEmbauche) {
        $this->dateEmbauche = $dateEmbauche;
        $date = dateAnglaisVersDateFrancais($this);

        return $date;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime 
     */
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array('ROLE_ADMIN');
    }

    public function getSalt() {
        return null;
    }

}
