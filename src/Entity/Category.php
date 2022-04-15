<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="blog_category")
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="cat_id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="cat_name", type="string", length=255, unique=true)
     */
    private $catName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatName(): ?string
    {
        return $this->catName;
    }

    public function setCatName(string $catName): self
    {
        $this->catName = $catName;

        return $this;
    }
}
