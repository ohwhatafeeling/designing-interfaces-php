<?php

class Pages extends Collection
{
  public function setEntity()
  {
    $this->entity = 'pages';
  }

  public function getTitle()
  {
    return $this->current()->title;
  }

  public function featuredImage()
  {
    return $this->current()->image;
  }
}
