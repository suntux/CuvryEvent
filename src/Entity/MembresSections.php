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

    /**
     * @ORM\OneToOne(targetEntity=Sections::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Section;

    /**
     * @ORM\OneToOne(targetEntity=Membres::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membres;

    /**
     * @ORM\OneToOne(targetEntity=TypeMembresSection::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $TypeMembresSection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?Sections
    {
        return $this->Section;
    }

    public function setSection(Sections $Section): self
    {
        $this->Section = $Section;

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

    public function getTypeMembresSection(): ?TypeMembresSection
    {
        return $this->TypeMembresSection;
    }

    public function setTypeMembresSection(TypeMembresSection $TypeMembresSection): self
    {
        $this->TypeMembresSection = $TypeMembresSection;

        return $this;
    }
}
