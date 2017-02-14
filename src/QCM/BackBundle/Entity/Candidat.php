<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\CandidatRepository")
 */
class Candidat
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
     * 
     *
     * @ORM\ManyToOne(targetEntity="Promotion", inversedBy="candidats")
     * 
     * 
     */
    private $promotion;
    
    
    /**
     * 
     *
     * @ORM\ManyToMany(targetEntity="Session")
     * @ORM\JoinTable(name="candidat_session",
     *      joinColumns={@ORM\JoinColumn(name="candidat_id", referencedColumnName="id")},
     *         inverseJoinColumns={@ORM\JoinColumn(name="session_id", referencedColumnName="id")}
     * )
     * 
     * 
     */
    private $sessions;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

