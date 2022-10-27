<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{

    use HasFactory;

    protected $fillable = [
        "name",
        "contact",
        "images"
    ];

    private static array $writers = [
        [
            'id' => 1,
            'name' => 'Burhan',
            'contact' => '667892',
            'images' => 'pic1.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Udin',
            'contact' => '734572',
            'images' => 'pic2.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Kenneth',
            'contact' => '865309',
            'images' => 'pic3.jpg'
        ]
    ];

    public static function index(){
        return collect(self::$writers);
    }

    public static function showWriter($id){
//        foreach (self::$writers as $writer){
//            if ($writer['id'] == $id){
//                return $writer;
//            }
//        }
        return self::index()->firstWhere('id', $id);
    }
}
