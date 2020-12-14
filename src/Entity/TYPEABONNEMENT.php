<?php

namespace App\Entity;

use App\Repository\TYPEABONNEMENTRepository;
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

    public function getId(): ?int
    {
        return $this->id;
    }
}
