<?php

namespace App\Entity;

use App\Repository\MOTSRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MOTSRepository::class)
 */
class MOTS
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
    private $LibelleMots;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleMots(): ?string
    {
        return $this->LibelleMots;
    }

    public function setLibelleMots(string $LibelleMots): self
    {
        $this->LibelleMots = $LibelleMots;

        return $this;
    }
}
