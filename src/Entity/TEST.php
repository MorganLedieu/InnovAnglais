<?php

namespace App\Entity;

use App\Repository\TESTRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TESTRepository::class)
 */
class TEST
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=RESULTATTEST::class, mappedBy="tEST")
     */
    private $id_resultat;

    /**
     * @ORM\OneToMany(targetEntity=UTILISATEUR::class, mappedBy="tEST")
     */
    private $id_test;

    /**
     * @ORM\ManyToOne(targetEntity=LISTES::class, inversedBy="id_liste")
     */
    private $lISTES;

    /**
     * @ORM\ManyToOne(targetEntity=THEME::class, inversedBy="id_theme")
     */
    private $tHEME;

    public function __construct()
    {
        $this->id_resultat = new ArrayCollection();
        $this->id_test = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|RESULTATTEST[]
     */
    public function getIdResultat(): Collection
    {
        return $this->id_resultat;
    }

    public function addIdResultat(RESULTATTEST $idResultat): self
    {
        if (!$this->id_resultat->contains($idResultat)) {
            $this->id_resultat[] = $idResultat;
            $idResultat->setTEST($this);
        }

        return $this;
    }

    public function removeIdResultat(RESULTATTEST $idResultat): self
    {
        if ($this->id_resultat->removeElement($idResultat)) {
            // set the owning side to null (unless already changed)
            if ($idResultat->getTEST() === $this) {
                $idResultat->setTEST(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UTILISATEUR[]
     */
    public function getIdTest(): Collection
    {
        return $this->id_test;
    }

    public function addIdTest(UTILISATEUR $idTest): self
    {
        if (!$this->id_test->contains($idTest)) {
            $this->id_test[] = $idTest;
            $idTest->setTEST($this);
        }

        return $this;
    }

    public function removeIdTest(UTILISATEUR $idTest): self
    {
        if ($this->id_test->removeElement($idTest)) {
            // set the owning side to null (unless already changed)
            if ($idTest->getTEST() === $this) {
                $idTest->setTEST(null);
            }
        }

        return $this;
    }

    public function getLISTES(): ?LISTES
    {
        return $this->lISTES;
    }

    public function setLISTES(?LISTES $lISTES): self
    {
        $this->lISTES = $lISTES;

        return $this;
    }

    public function getTHEME(): ?THEME
    {
        return $this->tHEME;
    }

    public function setTHEME(?THEME $tHEME): self
    {
        $this->tHEME = $tHEME;

        return $this;
    }
}
