<?php

namespace App\Entity;

use App\Repository\THEMERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=TEST::class, mappedBy="tHEME")
     */
    private $id_theme;

    public function __construct()
    {
        $this->id_theme = new ArrayCollection();
    }

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

    /**
     * @return Collection|TEST[]
     */
    public function getIdTheme(): Collection
    {
        return $this->id_theme;
    }

    public function addIdTheme(TEST $idTheme): self
    {
        if (!$this->id_theme->contains($idTheme)) {
            $this->id_theme[] = $idTheme;
            $idTheme->setTHEME($this);
        }

        return $this;
    }

    public function removeIdTheme(TEST $idTheme): self
    {
        if ($this->id_theme->removeElement($idTheme)) {
            // set the owning side to null (unless already changed)
            if ($idTheme->getTHEME() === $this) {
                $idTheme->setTHEME(null);
            }
        }

        return $this;
    }
}
