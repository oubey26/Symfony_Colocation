<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces_coloc
 *
 * @ORM\Table(name="annonces_coloc")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Annonces_colocRepository")
 */
class Annonces_coloc
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="innitiateur", type="integer")
     */
    private $innitiateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="code_postale", type="integer")
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="Nombre_deChambre", type="integer", nullable=true)
     */
    private $nombreDeChambre;


    public function __construct()
  {

  }
  
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set innitiateur
     *
     * @param integer $innitiateur
     *
     * @return Annonces_coloc
     */
    public function setInnitiateur($innitiateur)
    {
        $this->innitiateur = $innitiateur;

        return $this;
    }

    /**
     * Get innitiateur
     *
     * @return int
     */
    public function getInnitiateur()
    {
        return $this->innitiateur;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonces_coloc
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostale
     *
     * @param integer $codePostale
     *
     * @return Annonces_coloc
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return int
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Annonces_coloc
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonces_coloc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Annonces_coloc
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Annonces_coloc
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set nombreDeChambre
     *
     * @param integer $nombreDeChambre
     *
     * @return Annonces_coloc
     */
    public function setNombreDeChambre($nombreDeChambre)
    {
        $this->nombreDeChambre = $nombreDeChambre;

        return $this;
    }

    /**
     * Get nombreDeChambre
     *
     * @return int
     */
    public function getNombreDeChambre()
    {
        return $this->nombreDeChambre;
    }
}

