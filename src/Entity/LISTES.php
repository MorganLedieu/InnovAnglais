<?php

namespace App\Entity;

use App\Repository\LISTESRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LISTESRepository::class)
 */
class LISTES
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $LibelleListe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleListe(): ?string
    {
        return $this->LibelleListe;
    }

    public function setLibelleListe(string $LibelleListe): self
    {
        $this->LibelleListe = $LibelleListe;

        return $this;
    }
}
