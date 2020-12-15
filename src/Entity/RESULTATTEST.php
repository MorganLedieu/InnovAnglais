<?php

namespace App\Entity;

use App\Repository\RESULTATTESTRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RESULTATTESTRepository::class)
 */
class RESULTATTEST
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
    private $LibelleResultat;

    /**
     * @ORM\ManyToOne(targetEntity=TEST::class, inversedBy="id_resultat")
     */
    private $tEST;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleResultat(): ?string
    {
        return $this->LibelleResultat;
    }

    public function setLibelleResultat(string $LibelleResultat): self
    {
        $this->LibelleResultat = $LibelleResultat;

        return $this;
    }

    public function getTEST(): ?TEST
    {
        return $this->tEST;
    }

    public function setTEST(?TEST $tEST): self
    {
        $this->tEST = $tEST;

        return $this;
    }
}
