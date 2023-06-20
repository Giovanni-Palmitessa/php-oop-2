<?php
// instance variables
class Shelters extends Product
{
    private string $size;
    private string $shape;

    // GET AND SET FUNCTIONS
    // size

    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize()
    {
        return $this->size;
    }

    // shape

    public function setShape($shape)
    {
        $this->shape = $shape;
    }
    public function getShape()
    {
        return $this->shape;
    }
}
