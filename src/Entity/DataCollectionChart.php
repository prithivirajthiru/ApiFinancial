<?php

namespace App\Entity;

use App\Repository\DataCollectionChartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataCollectionChartRepository::class)]
class DataCollectionChart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   

    #[ORM\Column(nullable: true)]
    private ?int $dueAmount = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateOfDueGiven = null;

    #[ORM\Column(nullable: true)]
    private ?int $penaltyAmount = null;

    #[ORM\ManyToOne]
    private ?DataProfile $profile = null;

   
    #[ORM\Column(nullable: true)]
    private ?int $weekNumber = null;
    #[ORM\Column(nullable: true)]
    private ?int $actualAmount = null;
 private $profileId;
  private $collectionId;
  private  $fromDate;
  private  $name;
  private  $uniqueCodeNo;
  private  $weekNo;
  private  $daySlotId;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
    public function getDueAmount(): ?int
    {
        return $this->dueAmount;
    }

    public function setDueAmount(?int $dueAmount): static
    {
        $this->dueAmount = $dueAmount;

        return $this;
    }

    public function getDateOfDueGiven(): ?\DateTimeInterface
    {
        return $this->dateOfDueGiven;
    }

    public function setDateOfDueGiven(?\DateTimeInterface $dateOfDueGiven): static
    {
        $this->dateOfDueGiven = $dateOfDueGiven;

        return $this;
    }
    public function getWeekNumber(): ?int
    {
        return $this->weekNumber;
    }

    public function setWeekNumber(?int $weekNumber): static
    {
        $this->weekNumber = $weekNumber;

        return $this;
    }
    public function getActualAmount(): ?int
    {
        return $this->actualAmount;
    }

    public function setActualAmount(?int $actualAmount): static
    {
        $this->actualAmount = $actualAmount;

        return $this;
    }

    public function getPenaltyAmount(): ?int
    {
        return $this->penaltyAmount;
    }

    public function setPenaltyAmount(?int $penaltyAmount): static
    {
        $this->penaltyAmount = $penaltyAmount;

        return $this;
    }

    public function getProfile(): ?DataProfile
    {
        return $this->profile;
    }

    public function setProfile(?DataProfile $profile): static
    {
        $this->profile = $profile;

        return $this;
    }

   
       public function getProfileId(): ?int
    {
        return $this->profileId;
    }

    public function setProfileId(?int $profileId): self
    {
        $this->profileId = $profileId;

        return $this;
    }
      public function getCollectionId(): ?int
    {
        return $this->collectionId;
    }

    public function setCollectionId(?int $collectionId): static
    {
        $this->collectionId = $collectionId;

        return $this;
    }
    public function getFromdate(): ?string
    {
        return $this->fromDate;
    }

    public function setFromdate(?string $fromDate): self
    {
        $this->fromDate = $fromDate;

        return $this;
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }
    public function getUniqueCodeNo(): ?string
    {
        return $this->uniqueCodeNo;
    }

    public function setUniqueCodeNo(string $uniqueCodeNo): static
    {
        $this->uniqueCodeNo = $uniqueCodeNo;

        return $this;
    }
    public function getWeekNo(): ?string
    {
        return $this->weekNo;
    }

    public function setWeekNo(?string $weekNo): static
    {
        $this->weekNo = $weekNo;

        return $this;
    }
    public function getDaySlotId(): ?string
    {
        return $this->daySlotId;
    }

    public function setDaySlotId(string $daySlotId): static
    {
        $this->daySlotId = $daySlotId;

        return $this;
    }
}
