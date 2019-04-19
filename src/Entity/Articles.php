<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * "articles"
 *
 * @ORM\Table(name="Articles", indexes={@ORM\Index(name="IDX_46AB533E932D2EB4", columns={"FirstPhotoId"}), @ORM\Index(name="IDX_46AB533E3D178717", columns={"SecondPhotoId"}), @ORM\Index(name="IDX_46AB533E8159BA7", columns={"AuthorId"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName=""Articles"_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Title", type="string", length=500, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Text1", type="string", length=5000, nullable=true)
     */
    private $text1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Text2", type="string", length=5000, nullable=true)
     */
    private $text2;

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
     * @ORM\Column(name="FirstPhotoId", type="integer", nullable=true)
     */
    private $firstphotoid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SecondPhotoId", type="integer", nullable=true)
     */
    private $secondphotoid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AuthorId", type="integer", nullable=true)
     */
    private $authorid;

    /**
     * @var \Photos
     *
     * @ORM\ManyToOne(targetEntity="Photos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name=""FirstPhotoId"", referencedColumnName="id")
     * })
     */
}
