<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "Blue Berry",
            "color" => "Blue",
        ],
        [
            "id" => 2,
            "name" => "Mango",
            "color" => "Orange",
        ],
        [
            "id" => 3,
            "name" => "Coconut",
            "color" => "White",
        ],
        [
            "id" => 4,
            "name" => "Passion_Fruit",
            "color" => "Yellow",
        ],
        [
            "id" => 5,
            "name" => "Strawberry",
            "color" => "Red",
        ],
        [
            "id" => 6,
            "name" => "Melon",
            "color" => "Green",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
        6 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}
