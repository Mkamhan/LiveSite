<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    //

    public function index(){
        $title = ' الرئيسية ';
        return view('site.index',compact('title'));
    }

    public function siteGame(){
        $games=Categorie::isChild1(1);
        return view('site.pages.game',['games'=>$games]);
    }
    public function siteChat(){
        $chates=Categorie::isChild1(2);
        return view('site.pages.chat',['chates'=>$chates]);
    }

    public function siteCard(){
        $cardes=Categorie::isChild1(3);
        return view('site.pages.card',['cardes'=>$cardes]);
    }


////////////////////////////////////////////////////////////////////

    public function siteCategory($id){


       //$category=Categorie::where('name',$id)->first();
        //dd($category);
        $title =Categorie::isChildName($id);
        $categores=Categorie::isChild1($id);

        return view('site.pages.categores',['categores'=>$categores],compact('title'));
    }


    public function siteCategorySingel($id){

        //$id=24;
        //$category=Categorie::where('name',$id)->first();

        $title =Categorie::isChildName($id);
        $category=Categorie::getDataCatogry($id);
        // dd($category);


        return view('site.pages.singel-category',['category'=>$category],compact('title'));
    }

///////////////////////////////////////////////////////////////////////
    public function sitesins($id){
        $products=Product::getAllProduct1($id);
        return view('site.pages.singel',['products'=>$products]);
    }



}
