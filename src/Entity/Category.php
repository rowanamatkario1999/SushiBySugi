<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $kindProduct;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKindProduct(): ?string
    {
        return $this->kindProduct;
    }

    public function setKindProduct(?string $kindProduct): self
    {
        $this->kindProduct = $kindProduct;

        return $this;
    }

    public function getCategory(): ?Product
    {
        return $this->category;
    }

    public function setCategory(?Product $category): self
    {
        $this->category = $category;

        return $this;
    }
}
