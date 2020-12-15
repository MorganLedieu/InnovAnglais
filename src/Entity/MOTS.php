<?php

namespace App\Entity;

use App\Repository\MOTSRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=LISTES::class, mappedBy="mOTS")
     */
    private $id_liste;

    /**
     * @ORM\ManyToOne(targetEntity=CATEGORIE::class, inversedBy="id_categorie")
     */
    private $cATEGORIE;

    public function __construct()
    {
        $this->id_liste = new ArrayCollection();
    }

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

    /**
     * @return Collection|LISTES[]
     */
    public function getIdListe(): Collection
    {
        return $this->id_liste;
    }

    public function addIdListe(LISTES $idListe): self
    {
        if (!$this->id_liste->contains($idListe)) {
            $this->id_liste[] = $idListe;
            $idListe->setMOTS($this);
        }

        return $this;
    }

    public function removeIdListe(LISTES $idListe): self
    {
        if ($this->id_liste->removeElement($idListe)) {
            // set the owning side to null (unless already changed)
            if ($idListe->getMOTS() === $this) {
                $idListe->setMOTS(null);
            }
        }

        return $this;
    }

    public function getCATEGORIE(): ?CATEGORIE
    {
        return $this->cATEGORIE;
    }

    public function setCATEGORIE(?CATEGORIE $cATEGORIE): self
    {
        $this->cATEGORIE = $cATEGORIE;

        return $this;
    }
}
