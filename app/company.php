<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class company extends Model { 

    
    protected $table = 'companies';
    protected $fillable = ['email', 'password'];

    

    public function companyUp( $data )
    {
    //$table = 'company';
    //Business Logic Add
    $newObj = new self;

    $newObj-> name = $data['name'];
    $newObj-> company = $data['company'];
    $newObj-> phone_number = $data['phone_number'];
    $newObj-> email= $data['email'];
    $newObj-> password = $data['password'];

    $newObj-> save();
}
}
