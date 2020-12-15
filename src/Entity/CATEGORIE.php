<?php

namespace App\Entity;

use App\Repository\CATEGORIERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CATEGORIERepository::class)
 */
class CATEGORIE
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
    private $LibelleCategorie;

    /**
     * @ORM\OneToMany(targetEntity=MOTS::class, mappedBy="cATEGORIE")
     */
    private $id_categorie;

    public function __construct()
    {
        $this->id_categorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->LibelleCategorie;
    }

    public function setLibelleCategorie(string $LibelleCategorie): self
    {
        $this->LibelleCategorie = $LibelleCategorie;

        return $this;
    }

    /**
     * @return Collection|MOTS[]
     */
    public function getIdCategorie(): Collection
    {
        return $this->id_categorie;
    }

    public function addIdCategorie(MOTS $idCategorie): self
    {
        if (!$this->id_categorie->contains($idCategorie)) {
            $this->id_categorie[] = $idCategorie;
            $idCategorie->setCATEGORIE($this);
        }

        return $this;
    }

    public function removeIdCategorie(MOTS $idCategorie): self
    {
        if ($this->id_categorie->removeElement($idCategorie)) {
            // set the owning side to null (unless already changed)
            if ($idCategorie->getCATEGORIE() === $this) {
                $idCategorie->setCATEGORIE(null);
            }
        }

        return $this;
    }
}
