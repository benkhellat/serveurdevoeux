<?php

namespace SRVDV\ServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Filiere
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateFiliere", type="datetime")
     */
    private $dateFiliere;

    

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $User;

public function __toString(){
                
            return $this->nom .'  '.$this->User;
        }

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
     * Set dateFiliere
     *
     * @param integer $dateFiliere
     * @return Filiere
     */
    public function setDateFiliere($dateFiliere)

    {
        $this->dateFiliere = $dateFiliere;
    
        return $this;
    }

    /**
     * Get dateFiliere
     *
     * @return integer 
     */
    public function getDateFiliere()
    {
        return $this->dateFiliere;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Filiere
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set User
     *
     * @param User $User
     * @return Filiere
     */
    public function setUser($User)
    {
        $this->User = $User;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return mixed 
     */
    public function getUser()
    {
        return $this->User;
    }
}
