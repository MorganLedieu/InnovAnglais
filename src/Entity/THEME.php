<?php

namespace App\Entity;

use App\Repository\THEMERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=THEMERepository::class)
 */
class THEME
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
    private $LibelleTheme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleTheme(): ?string
    {
        return $this->LibelleTheme;
    }

    public function setLibelleTheme(string $LibelleTheme): self
    {
        $this->LibelleTheme = $LibelleTheme;

        return $this;
    }
}
