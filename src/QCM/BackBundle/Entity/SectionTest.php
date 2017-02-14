<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectionTest
 *
 * @ORM\Table(name="section_test")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\SectionTestRepository")
 */
class SectionTest
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
     * @ORM\Column(name="nbQuestionATirer", type="integer")
     */
    private $nbQuestionATirer;
    
    
    /**
     * 
     *
     * @ORM\OneToOne(targetEntity="Theme")
     */
    private $theme;
    
    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Test", inversedBy="sectionsTest")
     */
    private $test;
    
    
    


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
     * Set nbQuestionATirer
     *
     * @param integer $nbQuestionATirer
     *
     * @return SectionTest
     */
    public function setNbQuestionATirer($nbQuestionATirer)
    {
        $this->nbQuestionATirer = $nbQuestionATirer;

        return $this;
    }

    /**
     * Get nbQuestionATirer
     *
     * @return int
     */
    public function getNbQuestionATirer()
    {
        return $this->nbQuestionATirer;
    }
}

