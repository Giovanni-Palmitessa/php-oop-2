<?php
// instance variables
class Food extends Product
{
    private string $ingredients;
    private int $calories;
    private int $weight;

    // GET AND SET FUNCTIONS
    // ingredients

    public function setIngredients($ingredients)
    {
        if (strlen($ingredients) < 5) {
            die('Nome troppo corto');
        }
        $this->ingredients = $ingredients;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }

    // calories

    public function setCalories($calories)
    {
        if (strlen($calories) < 5) {
            die('Nome troppo corto');
        }
        $this->calories = $calories;
    }
    public function getCalories()
    {
        return $this->calories;
    }
}
