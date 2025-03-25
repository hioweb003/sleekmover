<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial.index')->with('tes',Testimonial::orderBy('created_at','DESC')->get());
                                              
    }

    
     public function create(){
       return view('admin.testimonial.create');
    }

    public function store(Request $r){
      
        $r->validate([
          'title' => ['required','string'],
          // 'message' => ['required','string']
        ]);
        
        
        $tit = Testimonial::create([
            'clientname' => $r->title,
           'message' => $r->message,
        ]);
        
        if($r->hasFile('clientimage')){
          $imagePath = $r->file('clientimage');
          $imageNewName = time().$imagePath->getClientOriginalName();
            $imagePath->move('imageupload', $imageNewName);

           Testimonial::where('id',$tit->id)->update([
            'clientimage' => 'imageupload/'.$imageNewName,
           ]);
        }
      return redirect()->route('tes.index')->with('success','Testimonial Created Successfully');
    }

       public function edit($id){
        return view('admin.testimonial.edit')->with('edtes',Testimonial::findorfail($id));
    }

    public function update(Request $r,$id){

       $r->validate([
         'title' => ['required','string'],
        // 'message' => ['required','string']
       ]);

       $upd = Testimonial::findorfail($id);

         if ($r->hasFile('clientimage')) {
            $imagePath = $r->file('clientimage');
          $imageNewName = time().$imagePath->getClientOriginalName();
            $imagePath->move('imageupload', $imageNewName);
            $upd->clientimage = 'imageupload/'.$imageNewName;
       }

       $upd->clientname = $r->title;
        $upd->message = $r->message;
       $upd->save();

         return redirect()->route('tes.index')->with('success','Testimonial Updated Successfully');
    }

      public function destroy($id){
       $de = Testimonial::findorfail($id);
       if (file_exists($de->clientimage)) {
         unlink($de->clientimage);
       }
        $de->delete(); 
         return redirect()->route('tes.index')->with('success','Testimonial Deleted Successfully');
    }
}
