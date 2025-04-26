<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
         $category = Category::all();
        // dd($category);
        return view('admin.category.index')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  
     */
    //'subcategory1' => ['required','string'],
        // 'subcategory2' => ['required']
    public function store(Request $request)
    {
       $request->validate([
         'category_name' => ['required','string'],
       ]);
    

    $cte = Category::create([
        'cate_name' => strtolower($request->category_name),
        'slug' => Str::slug($request->category_name),
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image');
    $imageNewName = time()."_".$imagePath->getClientOriginalName();
        $imagePath->move('uploads', $imageNewName);
        Category::where('id',$cte->id)->update([
        'image' => 'uploads/'.$imageNewName,
        ]);
    }
       
        return redirect()->route('admin.category.index')->with('success', 'Category Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$category = Category::findorfail($id);
       // return view('admin.categories.show')->with('categories',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {      
   
    $categoryedit = Category::where('id',$id)->first();

        return view('admin.category.edit')->with('categories',$categoryedit);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name' => ['required','string'],
        ]);

        $cate = Category::findorfail($id);

        if ($request->hasFile('image')) {
            if (file_exists($cate->image)) {
                unlink($cate->image);
             }
            $updateimagePath = $request->file('image');
         $updateimageNewName = time().$updateimagePath->getClientOriginalName();
           $updateimagePath->move('uploads', $updateimageNewName);
           $cate->image = 'uploads/'.$updateimageNewName;
       }

       $cate->update([
            'cate_name' => strtolower($request->category_name),
            'slug' => Str::slug($request->category_name),
        ]);

       return redirect()->route('admin.category.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);

        if (file_exists($category->image)) {
            unlink($category->image);
         }

        $category->delete();
    

         return redirect()->route('admin.category.index')->with('success', 'Category  Deleted');

    }
}
