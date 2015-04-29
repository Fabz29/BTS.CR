<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typePraticien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\typePraticienRepository")
 */
class typePraticien
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
     * @ORM\Column(name="libelleType", type="string", length=30)
     */
    private $libelleType;


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
     * Set libelleType
     *
     * @param string $libelleType
     * @return typePraticien
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string 
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }
}
