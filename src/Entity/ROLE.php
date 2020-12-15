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

    /**
     * @ORM\OneToOne(targetEntity=UTILISATEUR::class, cascade={"persist", "remove"})
     */
    private $id_utilisateur;

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

    public function getIdUtilisateur(): ?UTILISATEUR
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(?UTILISATEUR $id_utilisateur): self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }
}
