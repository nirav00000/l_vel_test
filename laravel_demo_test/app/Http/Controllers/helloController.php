<?php

namespace App\Http\Controllers;


use App\fruits;
use App\FruitFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class helloController extends Controller
{
   

   	// public function display_function()
    // {
        
    //     return view('hello1')->with('i', "--this came from controller--");
    // }


    //with parameter
    public function display_function(Request $request, $j)
    {
        		
    	$i  = "--this came from cntolller--"; 


        return view('hello1',compact('i','j'));
    }





    //---------------laravel crud=================

    //---------------laravel crud=================

    public function wholex(Request $request,fruits $fruits, FruitFactory $fruitFactory)

    {

        $fruits = $fruits->get();

        $fruitFactory = $fruitFactory->get();
  
        return view('wholex',compact('fruits','fruitFactory'));
    }


    public function viewx($name)
    {
        
        return view('viewx',compact('name'));
    }


    public function editx( fruits $fruits,  $id )
    {   
        $name = $fruits->where('id', $id)->first();
        
        return view('editx',compact('name','id'));
    }


    public function updatex(Request $request,fruits $fruits)
    {
        
        //from request
        $fruit_name = $request->input('fruit_name');
        $id = $request->input('id');


        


        // update query
        $testx =  $fruits->where('id', $id)->update(['fruit_name' => $fruit_name] ); 



         // print_r($fruits);
         // exit;

         //dd($testx);

        ///////////////

       //  $fruits->where('id', $id)
       // ->update([
       //     'fruit_name' => $fruit_name
       //  ]);

        

        //======= working one ================
        // DB::table('fruits')
        //       ->where('id', $id)
        //       ->update(['fruit_name' => $fruit_name]);
        //==================================
                
        //echo "hello";
        //exit;


        return redirect('/wholex');
    }



    public function insertx(Request $request,fruits $fruits)
    {
        

        $fruit_name = $request->input('fruit_name');


        $fruits->fruit_name = $fruit_name;
        $fruits->save();



        return back();
    }


    public function deletex(Request $request,fruits $fruits,$id)
    {
         
        $fruits->where('id', $id)->delete();
        
        return back();
    }

}








