<?php

namespace App\Http\Controllers;

use App\Models\Pagesetting;
use Illuminate\Http\Request;

class PagesettingsController extends Controller
{
    public function bio(){
        return view('admin.about')->with('abt',Pagesetting::where('caption','about page')->first());                                       
    }
   
   public function mission(){
        return view('admin.mission')->with('mis',Pagesetting::where('caption','mission')->first());                                       
    }
   public function vision(){
        return view('admin.vision')->with('vis',Pagesetting::where('caption','vision')->first());                                       
    }
   
   public function terms(){
        return view('admin.terms')->with('trm',Pagesetting::where('caption','terms')->first());                                       
    }
   
   public function privacy(){
        return view('admin.privacy')->with('prv',Pagesetting::where('caption','privacy')->first());                                       
    }
   
    public function contactpg(){
     return view('admin.contact')->with('cont',Pagesetting::where('caption','contact page')->first());
    }
   
    public function contact_save(Request $r){
       $caption2 = "contact page";
       if (!empty($r->savecontact)) {
            $checkcont = Pagesetting::where('caption','contact page')->first();
            if (empty($checkcont)) {                
               Pagesetting::create([
                'caption' => $caption2,
                 'email' => $r->email,
                 'phone' => $r->phone,
                 'address' => $r->address,
                 'location' => $r->location
            ]);
            } else {
               Pagesetting::where('caption','contact page')->update([
                'caption' => $caption2,
                 'email' => $r->email,
                 'phone' => $r->phone,
                 'address' => $r->address,
                 'location' => $r->location
            ]);
            }
             return redirect()->back()->with('success', 'Data Saved');
   
        }
   }
   
   public function save_bio(Request $r){
       $caption1 = "about page";
       if (!empty($r->saveabout)) {
            $checkabt = Pagesetting::where('caption','about page')->first();
            if (empty($checkabt)) {
                 Pagesetting::create([
               'caption' => $caption1,
                'content' => $r->content
           ]);
            } else {
                 Pagesetting::where('caption','about page')->update([
               'caption' => $caption1,
                'content' => $r->content
           ]);
            }
            
           return redirect()->back()->with('success', 'Data Saved');
   
       }
   }
   public function save_privacy(Request $r){
       $captionpr = "privacy";
       if (!empty($r->saveprivacy)) {
            $checkpriv = Pagesetting::where('caption',$captionpr)->first();
            if (empty($checkpriv)) {
                 Pagesetting::create([
               'caption' => $captionpr,
                'content' => $r->content
           ]);
            } else {
                 Pagesetting::where('caption',$captionpr)->update([
               'caption' => $captionpr,
                'content' => $r->content
           ]);
            }
            
           return redirect()->route('privacy')->with('success', 'Data Saved');
   
       }
   }
   
   public function save_terms(Request $r){
        $captiontrms = "terms";
        if (!empty($r->saveprivacy)) {
             $checktrms = Pagesetting::where('caption',$captiontrms)->first();
             if (empty($checktrms)) {
                  Pagesetting::create([
                'caption' => $captiontrms,
                 'content' => $r->content
            ]);
             } else {
                  Pagesetting::where('caption',$captiontrms)->update([
                'caption' => $captiontrms,
                 'content' => $r->content
            ]);
             }
             
            return redirect()->route('terms')->with('success', 'Data Saved');
    
        }
    }
   
   public function save_mission(Request $r){
       $captionms = "mission";
       if (!empty($r->savemission)) {
            $checkmis = Pagesetting::where('caption', $captionms)->first();
            if (empty($checkmis)) {
                 Pagesetting::create([
               'caption' =>  $captionms,
                'content' => $r->content
           ]);
            } else {
                 Pagesetting::where('caption', $captionms)->update([
               'caption' =>  $captionms,
                'content' => $r->content
           ]);
            }
            
           return redirect()->route('mission')->with('success', 'Data Saved');
   
       }
   }
   
   public function save_vision(Request $r){
       $captionv = "vision";
       if (!empty($r->savevis)) {
            $checkvis = Pagesetting::where('caption',$captionv)->first();
            if (empty($checkvis)) {
                 Pagesetting::create([
               'caption' => $captionv,
                'content' => $r->content
           ]);
            } else {
                 Pagesetting::where('caption',$captionv)->update([
               'caption' => $captionv,
                'content' => $r->content
           ]);
            }
            
           return redirect()->route('vision')->with('success', 'Data Saved');
   
       }
   }
   
   public function save_brochure(Request $r){
   
               $imagePath = $r->file('upload_brochure');
                  $imageNewName = time()."_".$imagePath->getClientOriginalName();
                    $imagePath->move('download', $imageNewName);
   
             $checkbroc = Pagesetting::where('caption','broch')->first();
             if (empty($checkbroc->content)) {
                  Pagesetting::create([
                'caption' => "broch",
                 'content' => "download/".$imageNewName
            ]);
             } else {
                  if(file_exists( $checkbroc->content)){
                       unlink($checkbroc->content);
                  }
                  Pagesetting::where('caption','broch')->update([
                'caption' =>"broch",
                'content' => "download/".$imageNewName
            ]);
             }
           
            return redirect()->back()->with('success','Brochure Uploaded');
   }
   
   public function consultationfee(Request $r){
   
         $checkconfee = Pagesetting::where('caption','confee')->first();
   
             if (empty($checkconfee->content)) {
                  Pagesetting::create([
                       'caption' => "confee",
                        'content' => $r->consultationfee
            ]);
   
         } else {
               
                  Pagesetting::where('caption','confee')->update([
                       'caption' => "confee",
                       'content' => $r->consultationfee
            ]);
      }
           
            return redirect()->back()->with('success','consultation Fee Updated');
   }
}
