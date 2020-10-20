<?php

namespace App\Entity;

use App\Repository\PresencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PresencesRepository::class)
 */
class Presences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Is_present;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsPresent(): ?bool
    {
        return $this->Is_present;
    }

    public function setIsPresent(?bool $Is_present): self
    {
        $this->Is_present = $Is_present;

        return $this;
    }
}
