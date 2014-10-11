<?php

namespace Re\ConfiguratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="Re\ConfiguratorBundle\Entity\ProductRepository")
 */
class Product
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
     * @ORM\ManyToOne(targetEntity="Technology", inversedBy="technologies")
     * @ORM\JoinColumn(name="technologyId", referencedColumnName="id")
     **/
    private $technology;

    /**
     * @ORM\ManyToMany(targetEntity="Color")
     * @ORM\JoinTable(name="products_color",
     *      joinColumns={@ORM\JoinColumn(name="productId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="colorId", referencedColumnName="id")}
     *      )
     */
    private $colors;

    /**
     * @ORM\ManyToMany(targetEntity="Accessory")
     * @ORM\JoinTable(name="included_product_accessories",
     *      joinColumns={@ORM\JoinColumn(name="productId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="accessoryId", referencedColumnName="id")}
     *      )
     */
    private $includedAccessories;

    /**
     * @ORM\ManyToMany(targetEntity="Accessory")
     * @ORM\JoinTable(name="additional_product_accessories",
     *      joinColumns={@ORM\JoinColumn(name="productId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="accessoryId", referencedColumnName="id")}
     *      )
     */
    private $additionalAccessories;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inStock", type="boolean")
     */
    private $inStock;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hydrostat", type="boolean")
     */
    private $hydrostat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ionization", type="boolean")
     */
    private $ionization;

    /**
     * @var boolean
     *
     * @ORM\Column(name="warmMist", type="boolean")
     */
    private $warmMist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aromatherapy", type="boolean")
     */
    private $aromatherapy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autoStop", type="boolean")
     */
    private $autoStop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="light", type="boolean")
     */
    private $light;

    /**
     * @var boolean
     *
     * @ORM\Column(name="filter", type="boolean")
     */
    private $filter;

    /**
     * @var string
     *
     * @ORM\Column(name="filterType", type="string", length=100)
     */
    private $filterType;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="smallint")
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="width", type="smallint")
     */
    private $width;

    /**
     * @var integer
     *
     * @ORM\Column(name="height", type="smallint")
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="smallint")
     */
    private $depth;

    /**
     * @var integer
     *
     * @ORM\Column(name="minPower", type="smallint")
     */
    private $minPower;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxPower", type="smallint")
     */
    private $maxPower;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxWorkTime", type="smallint")
     */
    private $maxWorkTime;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="decimal")
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="humidityLevel", type="string", length=100)
     */
    private $humidityLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="performance", type="smallint")
     */
    private $performance;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=25)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="utilizationTime", type="string", length=255)
     */
    private $utilizationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="warranty", type="smallint")
     */
    private $warranty;

    /**
     * @var string
     *
     * @ORM\Column(name="imagesURL", type="string", length=255)
     */
    private $imagesURL;

    /**
     * @var string
     *
     * @ORM\Column(name="videoURL", type="string", length=255)
     */
    private $videoURL;

    /**
     *
     */
    public function __construct()
    {
        $this->colors = new ArrayCollection;
        $this->includedAccessories = new ArrayCollection;
        $this->additionalAccessories = new ArrayCollection;
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

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set inStock
     *
     * @param boolean $inStock
     * @return Product
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;

        return $this;
    }

    /**
     * Get inStock
     *
     * @return boolean
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * Set hydrostat
     *
     * @param boolean $hydrostat
     * @return Product
     */
    public function setHydrostat($hydrostat)
    {
        $this->hydrostat = $hydrostat;

        return $this;
    }

    /**
     * Get hydrostat
     *
     * @return boolean
     */
    public function getHydrostat()
    {
        return $this->hydrostat;
    }

    /**
     * Set ionization
     *
     * @param boolean $ionization
     * @return Product
     */
    public function setIonization($ionization)
    {
        $this->ionization = $ionization;

        return $this;
    }

    /**
     * Get ionization
     *
     * @return boolean
     */
    public function getIonization()
    {
        return $this->ionization;
    }

    /**
     * Set warmMist
     *
     * @param boolean $warmMist
     * @return Product
     */
    public function setWarmMist($warmMist)
    {
        $this->warmMist = $warmMist;

        return $this;
    }

    /**
     * Get warmMist
     *
     * @return boolean
     */
    public function getWarmMist()
    {
        return $this->warmMist;
    }

    /**
     * Set aromatherapy
     *
     * @param boolean $aromatherapy
     * @return Product
     */
    public function setAromatherapy($aromatherapy)
    {
        $this->aromatherapy = $aromatherapy;

        return $this;
    }

    /**
     * Get aromatherapy
     *
     * @return boolean
     */
    public function getAromatherapy()
    {
        return $this->aromatherapy;
    }

    /**
     * Set autoStop
     *
     * @param boolean $autoStop
     * @return Product
     */
    public function setAutoStop($autoStop)
    {
        $this->autoStop = $autoStop;

        return $this;
    }

    /**
     * Get autoStop
     *
     * @return boolean
     */
    public function getAutoStop()
    {
        return $this->autoStop;
    }

    /**
     * Set light
     *
     * @param boolean $light
     * @return Product
     */
    public function setLight($light)
    {
        $this->light = $light;

        return $this;
    }

    /**
     * Get light
     *
     * @return boolean
     */
    public function getLight()
    {
        return $this->light;
    }

    /**
     * Set filter
     *
     * @param boolean $filter
     * @return Product
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get filter
     *
     * @return boolean
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set filterType
     *
     * @param string $filterType
     * @return Product
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Get filterType
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Set area
     *
     * @param integer $area
     * @return Product
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Product
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Product
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return Product
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set minPower
     *
     * @param integer $minPower
     * @return Product
     */
    public function setMinPower($minPower)
    {
        $this->minPower = $minPower;

        return $this;
    }

    /**
     * Get minPower
     *
     * @return integer
     */
    public function getMinPower()
    {
        return $this->minPower;
    }

    /**
     * Set maxPower
     *
     * @param integer $maxPower
     * @return Product
     */
    public function setMaxPower($maxPower)
    {
        $this->maxPower = $maxPower;

        return $this;
    }

    /**
     * Get maxPower
     *
     * @return integer
     */
    public function getMaxPower()
    {
        return $this->maxPower;
    }

    /**
     * Set maxWorkTime
     *
     * @param integer $maxWorkTime
     * @return Product
     */
    public function setMaxWorkTime($maxWorkTime)
    {
        $this->maxWorkTime = $maxWorkTime;

        return $this;
    }

    /**
     * Get maxWorkTime
     *
     * @return integer
     */
    public function getMaxWorkTime()
    {
        return $this->maxWorkTime;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     * @return Product
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set humidityLevel
     *
     * @param string $humidityLevel
     * @return Product
     */
    public function setHumidityLevel($humidityLevel)
    {
        $this->humidityLevel = $humidityLevel;

        return $this;
    }

    /**
     * Get humidityLevel
     *
     * @return string
     */
    public function getHumidityLevel()
    {
        return $this->humidityLevel;
    }

    /**
     * Set performance
     *
     * @param integer $performance
     * @return Product
     */
    public function setPerformance($performance)
    {
        $this->performance = $performance;

        return $this;
    }

    /**
     * Get performance
     *
     * @return integer
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Set volume
     *
     * @param string $volume
     * @return Product
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set utilizationTime
     *
     * @param string $utilizationTime
     * @return Product
     */
    public function setUtilizationTime($utilizationTime)
    {
        $this->utilizationTime = $utilizationTime;

        return $this;
    }

    /**
     * Get utilizationTime
     *
     * @return string
     */
    public function getUtilizationTime()
    {
        return $this->utilizationTime;
    }

    /**
     * Set warranty
     *
     * @param integer $warranty
     * @return Product
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * Get warranty
     *
     * @return integer
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Set imagesURL
     *
     * @param string $imagesURL
     * @return Product
     */
    public function setImagesURL($imagesURL)
    {
        $this->imagesURL = $imagesURL;

        return $this;
    }

    /**
     * Get imagesURL
     *
     * @return string
     */
    public function getImagesURL()
    {
        return $this->imagesURL;
    }

    /**
     * Set videoURL
     *
     * @param string $videoURL
     * @return Product
     */
    public function setVideoURL($videoURL)
    {
        $this->videoURL = $videoURL;

        return $this;
    }

    /**
     * Get videoURL
     *
     * @return string
     */
    public function getVideoURL()
    {
        return $this->videoURL;
    }

    /**
     * Set technology
     *
     * @param \Re\ConfiguratorBundle\Entity\Technology $technology
     * @return Product
     */
    public function setTechnology(\Re\ConfiguratorBundle\Entity\Technology $technology = null)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return \Re\ConfiguratorBundle\Entity\Technology
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * Add colors
     *
     * @param \Re\ConfiguratorBundle\Entity\Color $colors
     * @return Product
     */
    public function addColor(\Re\ConfiguratorBundle\Entity\Color $colors)
    {
        $this->colors[] = $colors;

        return $this;
    }

    /**
     * Remove colors
     *
     * @param \Re\ConfiguratorBundle\Entity\Color $colors
     */
    public function removeColor(\Re\ConfiguratorBundle\Entity\Color $colors)
    {
        $this->colors->removeElement($colors);
    }

    /**
     * Get colors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Add includedAccessories
     *
     * @param \Re\ConfiguratorBundle\Entity\Accessory $includedAccessories
     * @return Product
     */
    public function addIncludedAccessory(\Re\ConfiguratorBundle\Entity\Accessory $includedAccessories)
    {
        $this->includedAccessories[] = $includedAccessories;

        return $this;
    }

    /**
     * Remove includedAccessories
     *
     * @param \Re\ConfiguratorBundle\Entity\Accessory $includedAccessories
     */
    public function removeIncludedAccessory(\Re\ConfiguratorBundle\Entity\Accessory $includedAccessories)
    {
        $this->includedAccessories->removeElement($includedAccessories);
    }

    /**
     * Get includedAccessories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIncludedAccessories()
    {
        return $this->includedAccessories;
    }

    /**
     * Add additionalAccessories
     *
     * @param \Re\ConfiguratorBundle\Entity\Accessory $additionalAccessories
     * @return Product
     */
    public function addAdditionalAccessory(\Re\ConfiguratorBundle\Entity\Accessory $additionalAccessories)
    {
        $this->additionalAccessories[] = $additionalAccessories;

        return $this;
    }

    /**
     * Remove additionalAccessories
     *
     * @param \Re\ConfiguratorBundle\Entity\Accessory $additionalAccessories
     */
    public function removeAdditionalAccessory(\Re\ConfiguratorBundle\Entity\Accessory $additionalAccessories)
    {
        $this->additionalAccessories->removeElement($additionalAccessories);
    }

    /**
     * Get additionalAccessories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdditionalAccessories()
    {
        return $this->additionalAccessories;
    }
}
