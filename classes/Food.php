<?php
// instance variables
class Food extends Product
{
    private string $ingredients;
    private string $calories;
    private int $weight;

    public function setIngredients($ingredients)
    {
        if (strlen($ingredients) < 5) {
            die('Nome troppo corto');
        }
        $this->ingredients = $ingredients;
    }
    public function getName()
    {
        return $this->ingredients;
    }
}
