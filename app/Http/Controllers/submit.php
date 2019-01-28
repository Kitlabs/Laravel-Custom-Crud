<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class submit extends Controller
{
    public function index()
    {
        $data=array();
        $data['name']="vipan";
       /* echo "<pre>";
        print_r(Link::all()->toArray());*/
    	return view('submit',$data);
    } 
    public function getpost(Request $request)
    {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);
    $link = new \App\Link($data);
    $link->save();
    return redirect('/');

    }
}
