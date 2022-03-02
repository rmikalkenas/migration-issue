<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;

/**
 * @ORM\Entity()
 * @ORM\Table(name="customer")
 */
class Customer
{
    /**
    * @ORM\Id
    * @ORM\Column(type="guid", unique=true)
    * @ORM\GeneratedValue(strategy="CUSTOM")
    * @ORM\CustomIdGenerator(class=\Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator::class)
    */
    private string $id;

    /**
     * @ORM\Version()
     * @ORM\Column(type="datetime")
     */
    private \DateTime $version;

    public function getId(): string
    {
        return $this->id;
    }

    public function getVersion(): \DateTime
    {
        return $this->version;
    }
}
