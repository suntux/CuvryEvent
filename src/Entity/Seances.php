<?php

namespace App\Entity;

use App\Repository\SeancesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeancesRepository::class)
 */
class Seances
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="time")
     */
    private $Heure;

    /**
     * @ORM\Column(type="time")
     */
    private $Duree;

    /**
     * @ORM\OneToOne(targetEntity=RqSeances::class, cascade={"persist", "remove"})
     */
    private $Remarques;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->Heure;
    }

    public function setHeure(\DateTimeInterface $Heure): self
    {
        $this->Heure = $Heure;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->Duree;
    }

    public function setDuree(\DateTimeInterface $Duree): self
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getRemarques(): ?RqSeances
    {
        return $this->Remarques;
    }

    public function setRemarques(?RqSeances $Remarques): self
    {
        $this->Remarques = $Remarques;

        return $this;
    }
}
