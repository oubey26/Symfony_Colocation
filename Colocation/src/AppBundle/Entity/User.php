<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUSer;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 *
 * @package AppBudle\Entity
 * 
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Les_Colocataires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $colocataire;


    public function __construct(){
        parent::__construct();
    }
    
    

    /**
     * Set colocataire
     *
     * @param \AppBundle\Entity\Les_Colocataires $colocataire
     *
     * @return User
     */
    public function setColocataire(\AppBundle\Entity\Les_Colocataires $colocataire)
    {
        $this->colocataire = $colocataire;

        return $this;
    }

    /**
     * Get colocataire
     *
     * @return \AppBundle\Entity\Les_Colocataires
     */
    public function getColocataire()
    {
        return $this->colocataire;
    }
}
