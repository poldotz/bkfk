<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 3/28/13
 * Time: 10:34 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="resources")
 * use repository for handy tree functions
 * @ORM\Entity(repositoryClass="Bkfk\StoreBundle\Entity\ResourceRepository")
 */
class Resource {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @Gedmo\Translatable
     * @Gedmo\Sluggable
     * @ORM\Column(name="name", type="string", length=64)
     */
    protected $name;

    /**
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Resource", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Resource", mappedBy="parent")
     */
    private $children;


    /**
     * @Gedmo\Translatable
     * @Gedmo\Slug
     * @ORM\Column(name="slug", type="string", length=128)
     */
    private $slug;

    /**
     * @var date $created
     *
     * @ODM\Date
     * @Gedmo\Timestampable(on="create")
     */
    private $created;

    /**
     * @var date $updated
     *
     * @ODM\Date
     * @Gedmo\Timestampable
     */
    private $updated;

}