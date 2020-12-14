<?php

namespace App\Entity;

use App\Repository\ROLERepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ROLERepository::class)
 */
class ROLE
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
    private $LibelleRole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleRole(): ?string
    {
        return $this->LibelleRole;
    }

    public function setLibelleRole(string $LibelleRole): self
    {
        $this->LibelleRole = $LibelleRole;

        return $this;
    }
}
