<?php

namespace App\Entity;

use App\Repository\TYPEPAIEMENTRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TYPEPAIEMENTRepository::class)
 */
class TYPEPAIEMENT
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=UTILISATEUR::class, mappedBy="tYPEPAIEMENT")
     */
    private $id_typepaiement;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Libelle_typePaiement;

    public function __construct()
    {
        $this->id_typepaiement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|UTILISATEUR[]
     */
    public function getIdTypepaiement(): Collection
    {
        return $this->id_typepaiement;
    }

    public function addIdTypepaiement(UTILISATEUR $idTypepaiement): self
    {
        if (!$this->id_typepaiement->contains($idTypepaiement)) {
            $this->id_typepaiement[] = $idTypepaiement;
            $idTypepaiement->setTYPEPAIEMENT($this);
        }

        return $this;
    }

    public function removeIdTypepaiement(UTILISATEUR $idTypepaiement): self
    {
        if ($this->id_typepaiement->removeElement($idTypepaiement)) {
            // set the owning side to null (unless already changed)
            if ($idTypepaiement->getTYPEPAIEMENT() === $this) {
                $idTypepaiement->setTYPEPAIEMENT(null);
            }
        }

        return $this;
    }

    public function getLibelleTypePaiement(): ?string
    {
        return $this->Libelle_typePaiement;
    }

    public function setLibelleTypePaiement(string $Libelle_typePaiement): self
    {
        $this->Libelle_typePaiement = $Libelle_typePaiement;

        return $this;
    }
}
