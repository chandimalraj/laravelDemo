<?php
namespace App\Models;


class Listing {
   
    public static function all(){

        return [
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=>'Listing One description'
            ],
            [
                'id'=>2,
                'title'=>'Listing two',
                 'description'=>'Listing Two description'
          ],
            [
                'id'=>3,
                'title'=>'Listing Three',
                 'description'=>'Listing Three description'
            ]
            ];
    }
    
    public static function find($id){
        $listings = self::all();

       foreach ($listings as $listing) {
        if($listing['id']== $id){
            return $listing;
        }
        # code...
       }
    }
}