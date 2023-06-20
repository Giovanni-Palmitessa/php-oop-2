<?php
// instance variables
class Product
{
    public string $animal;
    public string $title;
    public string $description;
    public string $price;
    public string $urlImage;

    // constuctor

    public function __construct(string $animal, string $title, string $description, string $price, string $urlImage)
    {
        $this->animal = $animal;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->urlImage = $urlImage;
    }
}
