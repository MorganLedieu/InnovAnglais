<?php

namespace App\Entity;

use App\Repository\UTILISATEURRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UTILISATEURRepository::class)
 */
class UTILISATEUR
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance;

    /**
     * @ORM\ManyToOne(targetEntity=TYPEABONNEMENT::class, inversedBy="id_typeabonnement")
     */
    private $tYPEABONNEMENT;

    /**
     * @ORM\ManyToOne(targetEntity=TYPEPAIEMENT::class, inversedBy="id_typepaiement")
     */
    private $tYPEPAIEMENT;

    /**
     * @ORM\ManyToOne(targetEntity=TEST::class, inversedBy="id_test")
     */
    private $tEST;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getTYPEABONNEMENT(): ?TYPEABONNEMENT
    {
        return $this->tYPEABONNEMENT;
    }

    public function setTYPEABONNEMENT(?TYPEABONNEMENT $tYPEABONNEMENT): self
    {
        $this->tYPEABONNEMENT = $tYPEABONNEMENT;

        return $this;
    }

    public function getTYPEPAIEMENT(): ?TYPEPAIEMENT
    {
        return $this->tYPEPAIEMENT;
    }

    public function setTYPEPAIEMENT(?TYPEPAIEMENT $tYPEPAIEMENT): self
    {
        $this->tYPEPAIEMENT = $tYPEPAIEMENT;

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
