<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * "authors"
 *
 * @ORM\Table(name="Authors", indexes={@ORM\Index(name="IDX_41B113CD8AE386CF", columns={"MainPhotoId"})})
 * @ORM\Entity
 */
class Authors
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName=""Authors"_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SecName", type="string", length=100, nullable=true)
     */
    private $secname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=12, nullable=true)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ranking", type="integer", nullable=true)
     */
    private $ranking;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mission", type="string", length=200, nullable=true)
     */
    private $mission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainText", type="string", length=5000, nullable=true)
     */
    private $maintext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetimetz", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetimetz", nullable=false)
     */
    private $updatedat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MainPhotoId", type="integer", nullable=true)
     */
    private $mainphotoid;

    /**
     * @var \Photos
     *
     * @ORM\ManyToOne(targetEntity="Photos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name=""MainPhotoId"", referencedColumnName="id")
     * })
     */
}
