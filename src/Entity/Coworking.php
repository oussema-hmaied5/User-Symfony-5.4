<?php

namespace App\Entity;

use App\Repository\CoworkingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoworkingRepository::class)]
class Coworking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idco = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $tarifs = null;

    #[ORM\Column]
    private ?int $dispo = null;

    #[ORM\Column(length: 255)]
    private ?string $horaireouvr = null;

    #[ORM\Column(length: 255)]
    private ?string $horairefer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdco(): ?int
    {
        return $this->idco;
    }

    public function setIdco(int $idco): static
    {
        $this->idco = $idco;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTarifs(): ?float
    {
        return $this->tarifs;
    }

    public function setTarifs(float $tarifs): static
    {
        $this->tarifs = $tarifs;

        return $this;
    }

    public function getDispo(): ?int
    {
        return $this->dispo;
    }

    public function setDispo(int $dispo): static
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getHoraireouvr(): ?string
    {
        return $this->horaireouvr;
    }

    public function setHoraireouvr(string $horaireouvr): static
    {
        $this->horaireouvr = $horaireouvr;

        return $this;
    }

    public function getHorairefer(): ?string
    {
        return $this->horairefer;
    }

    public function setHorairefer(string $horairefer): static
    {
        $this->horairefer = $horairefer;

        return $this;
    }
}
