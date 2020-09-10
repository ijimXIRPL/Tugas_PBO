<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    //ini tampilan function index
    public function index()
    {
        //echo "<h1>Hello World, Dari Controller!!</h1>";
        //$nama= "Ijim";
        //$pelajaran=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        //return view('hello.index',compact('nama','pelajaran'));
        
        //$nama= "Ijim";
        //$pelajaran=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        //return view('hello.index',('nama'=>$nama,'pelajaran'=>$pelajaran));
    
        $d['nama']= "Ijim";
        $d['pelajaran']=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        return view('hello.index',$d);
    }

}