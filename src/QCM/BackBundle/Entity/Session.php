<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\SessionRepository")
 */
class Session
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
     * @ORM\Column(name="dureeValidite", type="integer")
     */
    private $dureeValidite;

     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="StaffENI", inversedBy="sessions")
     */
    private $staffENI;
    
    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Test", inversedBy="sessions")
     */
    private $test;
    
    /**
     * 
     *
     * @ORM\OneToOne(targetEntity="QuestionTirage")
     */
    private $questionTirage;
    
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="tempsEcoule", type="integer", nullable=true)
     */
    private $tempsEcoule;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="resultatObtenu", type="string", length=255, nullable=true)
     */
    private $resultatObtenu;


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
     * Set dureeValidite
     *
     * @param integer $dureeValidite
     *
     * @return Session
     */
    public function setDureeValidite($dureeValidite)
    {
        $this->dureeValidite = $dureeValidite;

        return $this;
    }

    /**
     * Get dureeValidite
     *
     * @return int
     */
    public function getDureeValidite()
    {
        return $this->dureeValidite;
    }

    /**
     * Set tempsEcoule
     *
     * @param integer $tempsEcoule
     *
     * @return Session
     */
    public function setTempsEcoule($tempsEcoule)
    {
        $this->tempsEcoule = $tempsEcoule;

        return $this;
    }

    /**
     * Get tempsEcoule
     *
     * @return int
     */
    public function getTempsEcoule()
    {
        return $this->tempsEcoule;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Session
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set resultatObtenu
     *
     * @param string $resultatObtenu
     *
     * @return Session
     */
    public function setResultatObtenu($resultatObtenu)
    {
        $this->resultatObtenu = $resultatObtenu;

        return $this;
    }

    /**
     * Get resultatObtenu
     *
     * @return string
     */
    public function getResultatObtenu()
    {
        return $this->resultatObtenu;
    }
}

