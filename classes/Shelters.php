<?php
// instance variables
class Shelters extends Product
{
    private string $size;
    private string $shape;

    // constructor
    public function __construct(
        string $category,
        string $title,
        string $description,
        string $price,
        string $urlImage,
        string $size,
        string $shape
    ) {
        parent::__construct($category, $title, $description, $price, $urlImage);
        $this->size = $size;
        $this->shape = $shape;
    }

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
