<?php

namespace App\Entity;

use App\Repository\TypeMembresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeMembresRepository::class)
 */
class TypeMembres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $GrantLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $GrantName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrantLevel(): ?int
    {
        return $this->GrantLevel;
    }

    public function setGrantLevel(int $GrantLevel): self
    {
        $this->GrantLevel = $GrantLevel;

        return $this;
    }

    public function getGrantName(): ?string
    {
        return $this->GrantName;
    }

    public function setGrantName(string $GrantName): self
    {
        $this->GrantName = $GrantName;

        return $this;
    }
}
