<?php

namespace App\Entity;

use App\Repository\IdGeneratorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdGeneratorRepository::class)]
class IdGenerator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $prefix = null;

    #[ORM\Column(nullable: true)]
    private ?int $value = null;

    #[ORM\Column(nullable: true)]
    private ?int $length = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $suffix = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $code = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): static
    {
        $this->length = $length;

        return $this;
    }

    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    public function setSuffix(?string $suffix): static
    {
        $this->suffix = $suffix;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }
}
