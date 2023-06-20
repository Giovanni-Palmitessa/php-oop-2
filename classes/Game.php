<?php
// instance variables
class Game extends Product
{
    private string $material;
    private string $color;
    private string $type;

    // constructor
    public function __construct(
        string $category,
        string $title,
        string $description,
        string $price,
        string $urlImage,
        string $material,
        string $color,
        string $type
    ) {
        parent::__construct($category, $title, $description, $price, $urlImage);
        $this->material = $material;
        $this->color = $color;
        $this->type = $type;
    }

    // GET AND SET FUNCTIONS
    // material

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

    // type

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
}
