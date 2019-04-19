<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * "photos"
 *
 * @ORM\Table(name="Photos")
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName=""Photos"_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path", type="string", length=1000, nullable=true)
     */
    private $path;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Height", type="integer", nullable=true)
     */
    private $height;

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


}
