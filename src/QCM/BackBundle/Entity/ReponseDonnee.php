<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseDonnee
 *
 * @ORM\Table(name="reponse_donnee")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\ReponseDonneeRepository")
 */
class ReponseDonnee
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
     * @ORM\ManyToOne(targetEntity="QuestionTirage", inversedBy="reponsesDonnees")
     * 
     * 
     */
    private $questionTirage;
    
   
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

