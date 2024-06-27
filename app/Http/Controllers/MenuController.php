<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function show()
    {
        // Data untuk item menu
        $menuItems = [
            "Appetizer" => [
                "img" => "img/appetizer.jpg",
                "items" => [
                    [
                        "name" => "Bruschetta",
                        "description" => "Grilled bread garnished with tomatoes and olive oil.",
                        "price" => 8
                    ],
                    [
                        "name" => "Stuffed Mushrooms",
                        "description" => "Mushrooms stuffed with cheese and herbs.",
                        "price" => 10
                    ],
                ]
            ],
            "Main Course" => [
                "img" => "img/main-courses.jpg",
                "items" => [
                    [
                        "name" => "Grilled Salmon",
                        "description" => "Salmon fillet grilled to perfection.",
                        "price" => 18
                    ],
                    [
                        "name" => "Steak Frites",
                        "description" => "Steak with French fries.",
                        "price" => 22
                    ],
                ]
            ],
            "Dessert" => [
                "img" => "img/desserts.jpg",
                "items" => [
                    [
                        "name" => "Chocolate Lava Cake",
                        "description" => "Warm chocolate cake with a molten center.",
                        "price" => 7
                    ],
                    [
                        "name" => "Tiramisu",
                        "description" => "Classic Italian coffee-flavored dessert.",
                        "price" => 8
                    ],
                ]
            ],
            "Beverages" => [
                "img" => "img/beverages.jpg",
                "items" => [
                    [
                        "name" => "Espresso",
                        "description" => "Rich and bold espresso.",
                        "price" => 3
                    ],
                    [
                        "name" => "House Wine",
                        "description" => "Red or white wine.",
                        "price" => 6
                    ],
                ]
            ]
        ];
        
        
         
         
    

        return view('menu', compact('menuItems'));
    }
}
