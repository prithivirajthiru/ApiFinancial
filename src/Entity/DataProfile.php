<?php

namespace App\Entity;

use App\Repository\DataProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataProfileRepository::class)]
class DataProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $uniqueCodeNo = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $guardianName = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $streetName = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $cityName = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $districtName = null;

    #[ORM\Column(nullable: true)]
    private ?int $pincode = null;

    #[ORM\Column(nullable: true)]
    private ?int $income = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $maritalStatus = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateOfRegistration = null;

    #[ORM\ManyToOne]
    private ?RefDaySlot $daySlot = null;

    #[ORM\Column(nullable: true)]
    private ?int $givenAmount = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isActive = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $phoneNumber = null;

    private $daySlotId;
    private $photos;  
     private  $fromDate;
     private  $aadharPhotos;
     private  $panPhotos;
     private  $profilePhotos;
     private  $weekNumber;
     private $userName;
     private  $fingerPrintPhotos;
     #[ORM\Column(length: 30, nullable: true)]
     private ?string $password = null;

     #[ORM\Column(length: 30, nullable: true)]
     private ?string $role = null;

     #[ORM\Column(length: 30, nullable: true)]
     private ?string $secondaryNumber = null;

     
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): static
    {
        $this->id = $id;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getGuardianName(): ?string
    {
        return $this->guardianName;
    }

    public function setGuardianName(?string $guardianName): static
    {
        $this->guardianName = $guardianName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(?string $streetName): static
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): static
    {
        $this->cityName = $cityName;

        return $this;
    }

    public function getDistrictName(): ?string
    {
        return $this->districtName;
    }

    public function setDistrictName(?string $districtName): static
    {
        $this->districtName = $districtName;

        return $this;
    }

    public function getPincode(): ?int
    {
        return $this->pincode;
    }

    public function setPincode(?int $pincode): static
    {
        $this->pincode = $pincode;

        return $this;
    }

    public function getIncome(): ?int
    {
        return $this->income;
    }

    public function setIncome(?int $income): static
    {
        $this->income = $income;

        return $this;
    }

    public function getMaritalStatus(): ?string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(?string $maritalStatus): static
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getDateOfRegistration(): ?\DateTimeInterface
    {
        return $this->dateOfRegistration;
    }

    public function setDateOfRegistration(\DateTimeInterface $dateOfRegistration): static
    {
        $this->dateOfRegistration = $dateOfRegistration;

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
    public function getDaySlotId(): ?int
    {
        return $this->daySlotId;
    }

    public function setDaySlotId(?int $daySlotId): static
    {
        $this->daySlotId = $daySlotId;

        return $this;
    }

    public function getGivenAmount(): ?int
    {
        return $this->givenAmount;
    }

    public function setGivenAmount(?int $givenAmount): static
    {
        $this->givenAmount = $givenAmount;

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

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
    public function getPhotos(): ?Array
    {
        return $this->photos;
    }

    public function setPhotos(?Array $photos): self
    {
        $this->photos = $photos;

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
    public function getAadharPhotos(): ?Array
    {
        return $this->aadharPhotos;
    }

    public function setAadharPhotos(?Array $aadharPhotos): self
    {
        $this->aadharPhotos = $aadharPhotos;

        return $this;
    }
    public function getPanPhotos(): ?Array
    {
        return $this->panPhotos;
    }

    public function setPanPhotos(?Array $panPhotos): self
    {
        $this->panPhotos = $panPhotos;

        return $this;
    }
    public function getProfilePhotos(): ?Array
    {
        return $this->profilePhotos;
    }

    public function setProfilePhotos(?Array $profilePhotos): self
    {
        $this->profilePhotos = $profilePhotos;

        return $this;
    } public function getFingerPrintPhotos(): ?Array
    {
        return $this->fingerPrintPhotos;
    }

    public function setFingerPrintPhotos(?Array $fingerPrintPhotos): self
    {
        $this->fingerPrintPhotos = $fingerPrintPhotos;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getSecondaryNumber(): ?string
    {
        return $this->secondaryNumber;
    }

    public function setSecondaryNumber(?string $secondaryNumber): static
    {
        $this->secondaryNumber = $secondaryNumber;

        return $this;
    }
}
