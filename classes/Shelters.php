<?php
// instance variables
class Shelters extends Product
{
    private string $size;

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
}
