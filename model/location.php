<?php


class location
{
 public $id = null;
 public $type = null;
 public $prix = null;
 public $image = null;
 public $description = null;

    /**
     * location constructor.
     * @param null $id
     * @param null $type
     * @param null $prix
     */
    public function __construct($id, $type, $prix, $image, $description)
    {
        $this->id = $id;
        $this->type = $type;
        $this->prix = $prix;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param null $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}