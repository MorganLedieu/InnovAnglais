<?php

namespace App\Entity;

use App\Repository\TYPEABONNEMENTRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TYPEABONNEMENTRepository::class)
 */
class TYPEABONNEMENT
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=UTILISATEUR::class, mappedBy="tYPEABONNEMENT")
     */
    private $id_typeabonnement;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Libelle_typeabonnement;

    public function __construct()
    {
        $this->id_typeabonnement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|UTILISATEUR[]
     */
    public function getIdTypeabonnement(): Collection
    {
        return $this->id_typeabonnement;
    }

    public function addIdTypeabonnement(UTILISATEUR $idTypeabonnement): self
    {
        if (!$this->id_typeabonnement->contains($idTypeabonnement)) {
            $this->id_typeabonnement[] = $idTypeabonnement;
            $idTypeabonnement->setTYPEABONNEMENT($this);
        }

        return $this;
    }

    public function removeIdTypeabonnement(UTILISATEUR $idTypeabonnement): self
    {
        if ($this->id_typeabonnement->removeElement($idTypeabonnement)) {
            // set the owning side to null (unless already changed)
            if ($idTypeabonnement->getTYPEABONNEMENT() === $this) {
                $idTypeabonnement->setTYPEABONNEMENT(null);
            }
        }

        return $this;
    }

    public function getLibelleTypeabonnement(): ?string
    {
        return $this->Libelle_typeabonnement;
    }

    public function setLibelleTypeabonnement(string $Libelle_typeabonnement): self
    {
        $this->Libelle_typeabonnement = $Libelle_typeabonnement;

        return $this;
    }
}
