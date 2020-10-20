<?php

namespace App\Entity;

use App\Repository\MembresSectionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MembresSectionsRepository::class)
 */
class MembresSections
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    public function getId(): ?int
    {
        return $this->id;
    }
}
