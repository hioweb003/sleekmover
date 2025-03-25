<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Pagesetting;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('admin.servicespg.index')->with('sers',Service::orderBy('id','DESC')->get());
    }

     public function create(){
       return view('admin.servicespg.create');
    }

    public function store(Request $r){
       $r->validate([
      'title' => ['required','string'],
      'details' => ['required','string'],
      'images' => ['required','image']
       ]);

       if ($r->hasFile('images')) {

          $imagePath = $r->file('images');
          $imageNewName = time().$imagePath->getClientOriginalName();
          $imagePath->move('imageupload', $imageNewName); 

       }

       Service::create([
           'title' => $r->title,
           'heading' => $r->heading,
           'slug' => Str::slug($r->title),
           'details' =>  $r->details,
           'images' => 'imageupload/'.$imageNewName
       ]);

       return redirect()->route('ser.index')->with('success','Services Created Successfully');
    }

     public function edit($id){
        return view('admin.servicespg.edit')->with('edser',Service::findorfail($id));
    }

   public function update(Request $r,$id){
         $r->validate([
      'title' => ['required','string'],
      'details' => ['required','string']
       ]);

      $upser = Service::findorfail($id);
      if ($r->hasFile('images')) {

        if(file_exists($upser->images)){
          unlink($upser->images);
        }

            $imagePath = $r->file('images');
          $imageNewName = time().$imagePath->getClientOriginalName();
            $imagePath->move('imageupload', $imageNewName);
            $upser->images = 'imageupload/'.$imageNewName;
       }

          $upser->title = $r->title;
          $upser->heading = $r->heading;
          $upser->slug = Str::slug($r->title);
          $upser->details = $r->details;
          $upser->save();

           return redirect()->route('ser.index')->with('success','Services Updated Successfully');
    }

      public function destroy($id){
        $del = Service::findorfail($id);
        if (file_exists($del->images)) {
         unlink($del->images);
       }
        $del->delete();

        return redirect()->route('ser.index')->with('success','Services Deleted Successfully');
    }
    

//     public function manageconslte(){
//      // where('payment_status',1)->
//       return view('admin.manageconsult')->with('constls',Consultation::orderBy('id','DESC')->get())
//                                        ->with('confeee',Pagesetting::where('caption','confee')->first());

//     }

//     public function viewconslte($id){

//       $cosntlt = Consultation::findorfail($id);
//       $cosntlt->status = 1;
//       $cosntlt->save();
      
//       return view('admin.viewconsult')->with('consl',$cosntlt);

//     }

//     public function deleteconslte($id){
//       $del = Consultation::findorfail($id);
    
//       $del->delete();

//       return redirect()->route('admin.consultation')->with('success','Consultation Deleted Successfully');
//   }
}
