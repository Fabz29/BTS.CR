<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * famille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CR\GSBRBundle\Entity\familleRepository")
 */
class famille
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
     * @ORM\Column(name="libelleFamille", type="string", length=80)
     */
    private $libelleFamille;


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
     * Set libelleFamille
     *
     * @param string $libelleFamille
     * @return famille
     */
    public function setLibelleFamille($libelleFamille)
    {
        $this->libelleFamille = $libelleFamille;

        return $this;
    }

    /**
     * Get libelleFamille
     *
     * @return string 
     */
    public function getLibelleFamille()
    {
        return $this->libelleFamille;
    }
}
