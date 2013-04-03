<?php

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * PointType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PointType extends Type
{

    const POINT = 'point';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * Gets the name of this type.
     *
     * @return string
     */
    public function getName() {
        return self::POINT;
    }

    /**
     *the SQL declaration snippet for a field of this type.
     *
     * @return string
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
        return 'POINT';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform) {
        //Null fields come in as empty strings
        if($value == '') {
            return null;
        }

        $data = unpack('x/x/x/x/corder/Ltype/dlat/dlon', $value);
        return new Bkfk\StoreBundle\Entity\Point($data['lat'], $data['lon']);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform) {
        if (!$value) return;

        return pack('xxxxcLdd', '0', 1, $value->getLatitude(), $value->getLongitude());
    }


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
