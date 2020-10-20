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

    /**
     * @ORM\OneToOne(targetEntity=Seances::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Seances;

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membres;

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

    public function getSeances(): ?Seances
    {
        return $this->Seances;
    }

    public function setSeances(Seances $Seances): self
    {
        $this->Seances = $Seances;

        return $this;
    }

    public function getMembres(): ?Membres
    {
        return $this->Membres;
    }

    public function setMembres(Membres $Membres): self
    {
        $this->Membres = $Membres;

        return $this;
    }
}
