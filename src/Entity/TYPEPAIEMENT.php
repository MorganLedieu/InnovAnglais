<?php

namespace App\Entity;

use App\Repository\TYPEPAIEMENTRepository;
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

    public function getId(): ?int
    {
        return $this->id;
    }
}
