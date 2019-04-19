<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * "orders"
 *
 * @ORM\Table(name="Orders")
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName=""Orders"_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="ThirdName", type="string", length=100, nullable=true)
     */
    private $thirdname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sex", type="string", length=10, nullable=true)
     */
    private $sex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=12, nullable=true)
     */
    private $phone;

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
