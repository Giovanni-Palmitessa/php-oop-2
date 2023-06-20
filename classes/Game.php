<?php
// instance variables
class Game extends Product
{
    private string $material;

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
}
