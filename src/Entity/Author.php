<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $SecName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $Ranking;

    /**
     * @ORM\Column(type="integer")
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $Mission;

    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $MainText;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MainPhoto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSecName(): ?string
    {
        return $this->SecName;
    }

    public function setSecName(string $SecName): self
    {
        $this->SecName = $SecName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getRanking(): ?int
    {
        return $this->Ranking;
    }

    public function setRanking(int $Ranking): self
    {
        $this->Ranking = $Ranking;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->Mission;
    }

    public function setMission(?string $Mission): self
    {
        $this->Mission = $Mission;

        return $this;
    }

    public function getMainText(): ?string
    {
        return $this->MainText;
    }

    public function setMainText(string $MainText): self
    {
        $this->MainText = $MainText;

        return $this;
    }

    public function getMainPhoto(): ?int
    {
        return $this->MainPhoto;
    }

    public function setMainPhoto(?int $MainPhoto): self
    {
        $this->MainPhoto = $MainPhoto;

        return $this;
    }
}
