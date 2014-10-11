<?php

namespace Re\DemoUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Color
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Color
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
     * @var string
     *
     * @ORM\Column(name="cos", type="string", length=255)
     */
    private $cos;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cos
     *
     * @param string $cos
     * @return Color
     */
    public function setCos($cos)
    {
        $this->cos = $cos;

        return $this;
    }

    /**
     * Get cos
     *
     * @return string 
     */
    public function getCos()
    {
        return $this->cos;
    }
}
