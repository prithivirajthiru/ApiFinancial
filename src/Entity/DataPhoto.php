<?php

namespace App\Entity;

use App\Repository\DataPhotoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataPhotoRepository::class)]
class DataPhoto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?RefAttachmentType $attachmentType = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $path = null;

    #[ORM\ManyToOne]
    private ?DataProfile $profile = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isActive = null;
    private $profileId;
    private $attachmentTypeId;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttachmentType(): ?RefAttachmentType
    {
        return $this->attachmentType;
    }

    public function setAttachmentType(?RefAttachmentType $attachmentType): static
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;

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

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): static
    {
        $this->isActive = $isActive;

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
    public function getAttachmentTypeId(): ?int
    {
        return $this->attachmentTypeId;
    }

    public function setAttachmentTypeId(?int $attachmentTypeId): self
    {
        $this->attachmentTypeId = $attachmentTypeId;

        return $this;
    }
}
