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
        if ($calories <= 0) {
            die('Le calorie devono essere maggiori di 0!');
        }
        $this->calories = $calories;
    }
    public function getCalories()
    {
        return $this->calories;
    }

    // weight

    public function setWeight($weight)
    {
        if ($weight === 0) {
            die('Il peso non può essere 0!');
        }
        $this->weight = $weight;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}
