<?php

namespace App\Entity;

use App\Repository\RqSeancesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RqSeancesRepository::class)
 */
class RqSeances
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Remarques;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemarques(): ?string
    {
        return $this->Remarques;
    }

    public function setRemarques(?string $Remarques): self
    {
        $this->Remarques = $Remarques;

        return $this;
    }
}
