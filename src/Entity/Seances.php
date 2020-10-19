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
     * @ORM\ManyToOne(targetEntity=Sections::class, inversedBy="seances")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Sections;

    /**
     * @ORM\OneToOne(targetEntity=RqSeances::class, mappedBy="Seance", cascade={"persist", "remove"})
     */
    private $rqSeances;

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

    public function getSections(): ?Sections
    {
        return $this->Sections;
    }

    public function setSections(?Sections $Sections): self
    {
        $this->Sections = $Sections;

        return $this;
    }

    public function getRqSeances(): ?RqSeances
    {
        return $this->rqSeances;
    }

    public function setRqSeances(?RqSeances $rqSeances): self
    {
        $this->rqSeances = $rqSeances;

        // set (or unset) the owning side of the relation if necessary
        $newSeance = null === $rqSeances ? null : $this;
        if ($rqSeances->getSeance() !== $newSeance) {
            $rqSeances->setSeance($newSeance);
        }

        return $this;
    }
}
