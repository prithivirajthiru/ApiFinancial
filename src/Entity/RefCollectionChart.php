<?php

namespace App\Entity;

use App\Repository\RefCollectionChartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RefCollectionChartRepository::class)]
class RefCollectionChart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $weekNo = null;

    #[ORM\ManyToOne]
    private ?RefDaySlot $daySlot = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isActive = null;

   private $daySlotId;

   #[ORM\Column(nullable: true)]
   private ?int $amount = null;
   
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
    public function getWeekNo(): ?int
    {
        return $this->weekNo;
    }

    public function setWeekNo(?int $weekNo): static
    {
        $this->weekNo = $weekNo;

        return $this;
    }

    public function getDaySlot(): ?RefDaySlot
    {
        return $this->daySlot;
    }

    public function setDaySlot(?RefDaySlot $daySlot): static
    {
        $this->daySlot = $daySlot;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }
  public function getDaySlotId(): ?int
    {
        return $this->daySlotId;
    }

    public function setDaySlotId(?int $daySlotId): static
    {
        $this->daySlotId = $daySlotId;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }


 
}
