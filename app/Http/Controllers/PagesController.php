<?php

namespace App\Http\Controllers;

use App\Menu;
use App\post as postModel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the home page of the site
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function menus()
    {
        $menus = Menu::paginate(9);
        return view('menus')
            ->with('menus', $menus);
    }

    public function registerpage()
    {
       return view('registerpage'); # code...
    }
    
    public function fDisplay()
    {
       return view('foodDisplay'); # code...
    }

    public function pdisplay(){
        $posts = DB::select('select * from posts');
        $image = image::all();
        return view('foodDisplay');
        }

    public function postUpdateDisplay()
    {
       return view('postUpdateDisplay'); # code...
    }

    public function postUpdate(Request $request){
        //dd($request);
        $com = new postModel();
        $com->postUp($request);

        return view('foodDisplay');
    }
        
    
    /**
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function menu($slug)
    {
        $menu = Menu::findBySlugOrFail($slug);
        return view('menu')
            ->with('menu', $menu);
    }
}
