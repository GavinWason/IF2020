<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Http\Requests;

class post extends Model
{

    


    public function postUp ( $data )
    {
        $newObj = new self;
       // dd($newObj);

       
        $newObj -> foodname = $data['foodname'];
        $newObj -> description =$data['description'];
        $newObj -> location = $data['location'];
        $newObj -> image = $data['image'];
        //$newObj -> selection = $data['selection'];
        $newObj -> price = $data['price'];

        $newObj -> save();

    }
    //
}
