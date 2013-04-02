<?php

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CrEOF\Spatial\PHP\Types\AbstractPoint;

/**
 * Location
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bkfk\StoreBundle\Entity\LocationRepository")
 */
class Location extends AbstractPoint
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}