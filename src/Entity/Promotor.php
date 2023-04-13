<?php

namespace App\Entity;

use App\Repository\PromotorRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotorRepository::class)]
class Promotor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $evento = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $grupo = null;

    #[ORM\Column(length: 8, nullable: true)]
    private ?string $dni = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $qr = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvento(): ?string
    {
        return $this->evento;
    }

    public function setEvento(?string $evento): self
    {
        $this->evento = $evento;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getGrupo(): ?string
    {
        return $this->grupo;
    }

    public function setGrupo(?string $grupo): self
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getQr(): ?string
    {
        return $this->qr;
    }

    public function setQr(?string $qr): self
    {
        $this->qr = $qr;

        return $this;
    }
}
