<?php


class paiement
{
 public $Id = null;
 public $name = null;
 public $cin = null;
 public $email = null;
 public $phone = null;
 public $date = null;
 public $type = null;

    public function __construct($Id, $name, $cin, $email, $phone ,$date, $type )
    {
        $this->Id = $Id;
        $this->name = $name;
        $this->cin = $cin;
        $this->email = $email;
        $this->phone = $phone;
        $this->date = $date;
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->Id = $Id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getCin()
    {
        return $cin->cin;
    }

    /**
     * @param null $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}