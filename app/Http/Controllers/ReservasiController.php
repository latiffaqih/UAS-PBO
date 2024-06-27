<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReservasiController extends Controller
{ 
    private $nama;
    private $email_telefon;
    private $jumlah_orang;
    private $tanggal_reservasi;
   

    
    public function store(Request $request)
    {
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
                "img" => "img/main-course.jpg",
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
       
        
        $this->nama = $request->input('nama');
        $this->email_telefon = $request->input('email_telefon');
        $this->jumlah_orang= $request->input('jumlah_orang');
        $this->tanggal_reservasi = $request->input('tanggal_reservasi');
      

        DB::table('restable')->insert([
            'nama' => $this->nama,
            'jumlah_orang' => $this->jumlah_orang,
            'tanggal_reservasi' => $this->tanggal_reservasi,
             'email_telefon' => $this->email_telefon,
           
        ]);

        return view('menu', compact('menuItems'));

}}