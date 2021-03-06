<?php

namespace QCM\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Simple
 *
 * @ORM\Table(name="simple")
 * @ORM\Entity(repositoryClass="QCM\BackBundle\Repository\SimpleRepository")
 */
class Simple
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

