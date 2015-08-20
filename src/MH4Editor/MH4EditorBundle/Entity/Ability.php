<?php
// /src/MH4Editor/MH4EditorBundle/Entity/Ability.php
namespace MH4Editor\MH4EditorBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="abilities")
 */
class Ability
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text",name="name")
     */
    private $name;

     /**
     * @ORM\Column(type="text",name="name_en")
     */
    private $nameEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

     /**
     * @ORM\Column(type="string", length=255,name="description_en")
     */
    private $descriptionEn;

     /**
     * @ORM\OneToMany(targetEntity="AbilityActive", mappedBy="ability")
     */
    protected $abilitiesActive;

    public function __construct(){

        $this->abilitiesActive = new ArrayCollection();
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
     * @return Ability
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
     * Set nameEn
     *
     * @param string $nameEn
     * @return Ability
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * Get nameEn
     *
     * @return string 
     */
    public function getEnglishName()
    {
        return $this->getNameEn();
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ability
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
     * Get description
     *
     * @return string 
     */
    public function getEnglishDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return Ability
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    /**
     * Get descriptionEn
     *
     * @return string 
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * Add abilitiesActive
     *
     * @param \MH4Editor\MH4EditorBundle\Entity\AbilityActive $abilitiesActive
     * @return Ability
     */
    public function addAbilitiesActive(\MH4Editor\MH4EditorBundle\Entity\AbilityActive $abilitiesActive)
    {
        $this->abilitiesActive[] = $abilitiesActive;

        return $this;
    }

    /**
     * Remove abilitiesActive
     *
     * @param \MH4Editor\MH4EditorBundle\Entity\AbilityActive $abilitiesActive
     */
    public function removeAbilitiesActive(\MH4Editor\MH4EditorBundle\Entity\AbilityActive $abilitiesActive)
    {
        $this->abilitiesActive->removeElement($abilitiesActive);
    }

    /**
     * Get abilitiesActive
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbilitiesActive()
    {
        return $this->abilitiesActive;
    }
}
