<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'genre' => 'Drama',
                'year' => 1994,
                'image' => 'shawshank.jpg' // Placeholder image - replace with actual image path
            ],
            [
                'id' => 2,
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'genre' => 'Crime, Drama',
                'year' => 1972,
                'image' => 'godfather.jpg'  // Placeholder image - replace with actual image path
            ],
            [
                'id' => 3,
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'genre' => 'Crime, Drama',
                'year' => 1994,
                'image' => 'pulp_fiction.jpg' // Placeholder image - replace with actual image path
            ],
            [
                'id' => 4,
                'title' => 'Spirited Away',
                'description' => 'During her family\'s move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches, and spirits, and where humans are changed into beasts.',
                'genre' => 'Animation, Adventure, Family',
                'year' => 2001,
                'image' => 'spirited_away.jpg' // Placeholder image - replace with actual image path
            ]
        ];

        return view('products', ['products' => $products]);
    }
}