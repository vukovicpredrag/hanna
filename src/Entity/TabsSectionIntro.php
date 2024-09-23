<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TabsSectionIntroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TabsSectionIntroRepository::class)]
#[ApiResource]
class TabsSectionIntro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
