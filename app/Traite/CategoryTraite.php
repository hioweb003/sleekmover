<?php

namespace App\Traite;

use App\Models\Category;

trait CategoryTraite
{
    public function categorys(): array
    {
      $categoryArray = [];

        $categories = Category::all();
      
        foreach ($categories as $category) {
            array_push($categoryArray, [
                'id' => $category->id,
                'name' => $category->cate_name,
                'slug' => $category->slug,
                'imagge' => $category->image,
            ]);
        }

        return $categoryArray;
    
        // $categories = [
        //     'boxes' => 'Boxes',
        //     'equipment' => 'Equipment',
        //     'mattress-covers' => 'Mattress Covers',
        //     'tv-art-boxes' => 'TV & Art Boxes',
        //     'moving-kits' => 'Moving Kits',
        //     'packing' => 'Packing',
        //     'wrapping' => 'Wrapping'
        // ];

        // return $categories;
    }   
}
