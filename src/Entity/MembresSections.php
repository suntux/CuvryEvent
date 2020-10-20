<?php

namespace App\Entity;

use App\Repository\MembresSectionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membres;

    /**
     * @ORM\OneToOne(targetEntity=Sections::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Sections;

    /**
     * @ORM\OneToOne(targetEntity=TypeMembresSection::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSections(): ?Sections
    {
        return $this->Sections;
    }

    public function setSections(Sections $Sections): self
    {
        $this->Sections = $Sections;

        return $this;
    }

    public function getType(): ?TypeMembresSection
    {
        return $this->Type;
    }

    public function setType(TypeMembresSection $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

}
