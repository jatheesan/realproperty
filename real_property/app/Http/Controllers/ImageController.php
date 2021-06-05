<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property_image;
use Illuminate\Http\Request;
use Image;
use DB;

class ImageController extends Controller
{
    //////////this is for multi image all methods
    public function index($id){
        $images=Property_image::where('property_id', '=', $id)->get();
        $pro_id = $id;
        $main=Property_image::where('property_id', '=', $id)->where('is_main', 1)->first();
        //dd($main);
        return view('images.index', compact('pro_id', 'images', 'main'));
    }

    public function StoreImage(Request $request){  
        $image = $request->file('image');
        $pro_id =$request -> property_id;

        foreach($image as $multi_img){

        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(700,400)->save('images/properties/'.$name_gen);
      
        $last_img = 'images/properties/'.$name_gen;
        
        Property_image::insert([
            'image'=>$last_img,
            'property_id'=>$pro_id
        ]);
        }// end of the foreach
        return Redirect()->back()->with('success','images upload successfully');

    }

    public function UpdateImage($id, Request $request)
    {
        $pro_id =$request -> property_id;
        Property_image::where('property_id', '=', $pro_id)->update(['is_main' => '0']);
        $images = Property_image::findOrFail($id);
        $images-> is_main = '1';

        $images->save();
        return Redirect()->back()->with('success','main image was update successfully');
    }

    public function DeleteImage($id)
    {
        $image = Property_image::findOrFail($id);
        $image->delete();

        return Redirect()->back()->with('success','image was successfully deleted');
    }
}
