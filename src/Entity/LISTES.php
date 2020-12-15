<?php

namespace App\Entity;

use App\Repository\LISTESRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=MOTS::class, inversedBy="id_liste")
     */
    private $mOTS;

    /**
     * @ORM\OneToMany(targetEntity=TEST::class, mappedBy="lISTES")
     */
    private $id_liste;

    public function __construct()
    {
        $this->id_liste = new ArrayCollection();
    }

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

    public function getMOTS(): ?MOTS
    {
        return $this->mOTS;
    }

    public function setMOTS(?MOTS $mOTS): self
    {
        $this->mOTS = $mOTS;

        return $this;
    }

    /**
     * @return Collection|TEST[]
     */
    public function getIdListe(): Collection
    {
        return $this->id_liste;
    }

    public function addIdListe(TEST $idListe): self
    {
        if (!$this->id_liste->contains($idListe)) {
            $this->id_liste[] = $idListe;
            $idListe->setLISTES($this);
        }

        return $this;
    }

    public function removeIdListe(TEST $idListe): self
    {
        if ($this->id_liste->removeElement($idListe)) {
            // set the owning side to null (unless already changed)
            if ($idListe->getLISTES() === $this) {
                $idListe->setLISTES(null);
            }
        }

        return $this;
    }
}
