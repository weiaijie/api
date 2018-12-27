<?php

namespace app\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Request;

class ShopsController extends Controller
{
    /*
     |-------------------------------------------------------------------------------
     | Get All Shops
     |-------------------------------------------------------------------------------
     | URL:            /api/Shops
     | Method:         GET
     | Description:    Gets all of the Shops in the application
    */
    public function getShops(){
    	$shops = Shop::all();
        return response()->json($cafes);
    }

    /*
     |-------------------------------------------------------------------------------
     | Get An Individual Shop
     |-------------------------------------------------------------------------------
     | URL:            /api/Shops/{id}
     | Method:         GET
     | Description:    Gets an individual cafe
     | Parameters:
     |   $id   -> ID of the cafe we are retrieving
    */
    public function getShop($id){
    	$cafe = Shop::where('id', '=', $id)->first();
        return response()->json($cafe);
    }

    /*
     |-------------------------------------------------------------------------------
     | Adds a New Shop
     |-------------------------------------------------------------------------------
     | URL:            /api/Shops
     | Method:         POST
     | Description:    Adds a new cafe to the application
    */
    public function postNewShop(){

    }

    public function goodsList(){
        // $shops = Shop::all();
        $shops = DB::select('select * from olm_product');
        return response()->json($cafes);
    }

}