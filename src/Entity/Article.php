<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Author;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Author", inversedBy="Article", cascade={"persist", "remove"})
     */
    private $author;

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $Text1;

    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $Title2;

    /**
     * @ORM\Column(type="integer")
     */
    private $AuthorId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(?string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->Text1;
    }

    public function setText1(?string $Text1): self
    {
        $this->Text1 = $Text1;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->Title2;
    }

    public function setTitle2(string $Title2): self
    {
        $this->Title2 = $Title2;

        return $this;
    }

    public function getAuthorId(): ?int
    {
        return $this->AuthorId;
    }

    public function setAuthorId(int $AuthorId): self
    {
        $this->AuthorId = $AuthorId;

        return $this;
    }
}
