<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SurEffectifsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SurEffectifsRepository::class)]
#[ApiResource]
class SurEffectifs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSignalement = null;
    
    #[ORM\Column(length: 255)]
    private ?string $substance = null;
    
    #[ORM\Column(nullable: true)]
    private ?int $effectifMax15Jours = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $qui = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $signale = null;
    
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $createdAt = null;
    
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSignalement(): ?\DateTimeInterface
    {
        return $this->dateSignalement;
    }

    public function setDateSignalement(?\DateTimeInterface $dateSignalement): static
    {
        $this->dateSignalement = $dateSignalement;

        return $this;
    }
    
    public function getSubstance(): ?string
    {
        return $this->substance;
    }

    public function setSubstance(string $substance): static
    {
        $this->substance = $substance;

        return $this;
    }

    public function getEffectifMax15Jours(): ?int
    {
        return $this->effectifMax15Jours;
    }

    public function setEffectifMax15Jours(?int $effectifMax15Jours): static
    {
        $this->effectifMax15Jours = $effectifMax15Jours;

        return $this;
    }

    public function getQui(): ?string
    {
        return $this->qui;
    }

    public function setQui(?string $qui): static
    {
        $this->qui = $qui;

        return $this;
    }

    public function isSignale(): ?bool
    {
        return $this->signale;
    }

    public function setSignale(?bool $signale): static
    {
        $this->signale = $signale;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
