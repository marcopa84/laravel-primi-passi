<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function cds() {

        $data = [
            [
                'imgpath'=> 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album'=>'New Jersey',
                'artist'=>'Bon Jovi',
                'year'=>1988
            ]
        ];

        return view('cds', compact('data'));
    }
}
