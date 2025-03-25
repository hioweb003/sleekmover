<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at','DESC')->get();
        
        return view('admin.products.index')->with('products',$product);
                                           
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
      
      //dd( $category);
        return view('admin.products.create')->with('orders',Order::where('status','pending')->get());
                               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
         'pro_name' => ['required','string'],
         'description' => ['required'],
         'regular_price' => ['required','numeric','gt:0'],
          'quantity' => ['required'],
         'featured_image' => ['required','image','mimes:jpeg,jpg,bmp,png'],     
       ]);
    
       $product = Product::create([
          'user_id' => $request->admin_id,
          'category' => $request->category,
          'pro_name' => $request->pro_name,
          'slug' => Str::slug($request->pro_name),
          'description' => $request->description,
          'price' => $request->regular_price,
          'quantity' => $request->quantity, 
       ]);

          //single image
     if ($request->featured_image) {
            $imagePath = $request->file('featured_image');
        $imageNewName = time()."_".$imagePath->getClientOriginalName();
            $imagePath->move('uploads', $imageNewName);
            Product::where('id',$product->id)->update([
            'image' => 'uploads/'.$imageNewName,
            ]);
        }
      
         return redirect()->route('product.index')->with('success', 'Product Added Successfully');
                                                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         /* $productshow = Product::findorfail($id);
        return view('admin.products.show')
                                           ->with('showpro', $productshow)
                                            ->with('variations', product_variation::all())
                                             ->with('subcategories', subcategoryone::all())
                                             ->with('subcategories2', subcategorytwo::all())
                                             ->with('galleries', gallery_image::where('product_id', $productshow->id)->get());*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //$category = Subcategory::with(['categories'])->get();
        $productedit = Product::findorfail($id);
        return view('admin.products.edit')->with('editpro', $productedit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
         'pro_name' => ['required','string'],
         'description' => ['required'],
         'regular_price' => ['required','numeric'],
         'quantity' => ['required'],
       ]);

      $productupdate = Product::findorfail($id);
               //single image
        if ($request->hasFile('featured_image')) {
             $updateimagePath = $request->file('featured_image');
          $updateimageNewName = time().$updateimagePath->getClientOriginalName();
            $updateimagePath->move('uploads', $updateimageNewName);
            $productupdate->image = 'uploads/'.$updateimageNewName;
        }
        
          $productupdate->category = $request->category;
          $productupdate->pro_name = $request->pro_name;
          $productupdate->slug = Str::slug($request->pro_name);
          $productupdate->description = $request->description;
          $productupdate->price = $request->regular_price;
          $productupdate->quantity = $request->quantity; 
         $productupdate->save();

       

         return redirect($request->uredirct)->with('success', 'Product Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdelete = Product::findorfail($id);
              if (file_exists($productdelete->image)) {
           unlink($productdelete->image);
        }

        $productdelete->delete();
          
         return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
    }

 
}
