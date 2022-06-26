<?php

namespace App\Model;


class Product
{
  private $id, $name, $description;

  public function GetId()
  {
    return $this->id;
  }

  public function SetId($id)
  {
    $this->id = $id;
  }

  public function GetName()
  {
    return $this->name;
  }
  public function SetName($name)
  {
    $this->name = $name;
  }

  public function GetDescription()
  {
    return $this->description;
  }
  public function SetDescription($description)
  {
    $this->description = $description;
  }
}
