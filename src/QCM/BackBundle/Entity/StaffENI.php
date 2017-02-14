<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StaffENI
 *
 * @ORM\Table(name="staffeni")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\StaffENIRepository")
 */
class StaffENI
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
     * @ORM\OneToMany(targetEntity="Session", mappedBy="staffENI")
     * 
     * 
     */
    private $sessions;
    
    
    /**
     * 
     *
     * @ORM\OneToMany(targetEntity="Test", mappedBy="staffENI")
     * 
     * 
     */
    private $tests;
    


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

