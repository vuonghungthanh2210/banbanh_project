<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
   		
	public function getIndex(){	
        $slide =Slide::all();
        //return view('page.trangchu',['slide'=>$slide]);
               $new_product = Product::where('new',1)->get();	
        //dd($new_product);	
        return view('page.trangchu',compact('slide','new_product'));
    }	
    
    public function getLoaiSp(){			
    	return view('page.loai_sanpham');		
    }
    public function geChitiet(){			
    	return view('page.chitiet_sanpham');		
    }
    public function geLienhe(){			
    	return view('page.lienhe');		
    }
    public function getAbout(){			
    	return view('page.about');		
    }
}
