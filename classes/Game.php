<?php
// instance variables
class Game extends Product
{
    private string $material;
    private string $color;

    // GET AND SET FUNCTIONS
    // ingredients

    public function setMaterial($material)
    {
        $this->material = $material;
    }
    public function getMaterial()
    {
        return $this->material;
    }

    // color

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
}
