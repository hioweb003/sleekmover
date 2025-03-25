<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard')
                                    ->with('posts', Post::all())
                                    ->with('ser', Service::all())
                                    ->with('users', User::all());
                                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createuser');
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
            'username' => ['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'username' => $request->username,
           'password' => Hash::make($request->password),
           'roles' => '0'
        ]);

          return redirect()->route('admin.user')->with('success','New Account Created Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contacts_message(Request $r)
    {
      $r->validate([          
            'message' => ['required','string']
        ]);
      
    $data = array(
      'email' => $r->email,
      'subject' => $r->subject,
      'msg' => $r->message
    );

    Mail::send('mails.mailsend', $data, function($message) use ($data) {
      $message->from('no-reply@kulishaeducation.com');
      $message->to($data['email']);
      $message->subject($data['subject']);
    });

          return redirect()->route('contact.mail')->with('success','Mail sent Successfully');
    }

    
    // public function contacts()
    // {
    //     return view('admin.contactspg')->with('cons', Contact::all())
    //                                        ->with('conscount', Contact::where('status','1')->get());
    // }

    
    // public function contactdetails($id)
    // {
    //   $updemail = Contact::findorfail($id);
    //   $updemail->status = '0';
    //   $updemail->save();
    //     return view('admin.contactdetails')
    //                                    ->with('conscount', Contact::where('status','1')->get())
    //                                   ->with('cdet',Contact::findorfail($id));
    // }

    //  public function deleteemails($id)
    // {
    //     $delmail = Contact::findorfail($id);
    //     $delmail->delete();
    //     return redirect()->back()->with('success','Mail Deleted Successfully');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove = User::findorfail($id);
        $remove->delete();
          return redirect()->route('admin.user')->with('success','Account Deleted Successfully');
    }

          
    public function make_admin($id){
       $admin = User::findorfail($id);
        $admin->roles = '1';
        $admin->save();

        return redirect()->route('admin.user')->with('success','Permission Changed Successfully');
    }

        
    public function not_admin($id){
   
       $admin = User::findorfail($id);
         $admin->roles = '0';
        $admin->save();

        return redirect()->route('admin.user')->with('success','Permission Changed Successfully');
    }

    public function adminuser(){
       $admin = User::all();
      return view('admin.users')->with('adusers', $admin);
        
    }
   //show password
     public function showchangepassword(){
           return view('admin.changepassword');
        }

        //changepassword
     public function changepassword(Request $request){

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

           User::where('id',$request->id)->update([
              'password' => Hash::make($request->password)
          ]);
       
           return redirect()->route('password.change')->with('success','Password Changed Successfully');
        }

     
         //newsletter 
        public function managenewsletter(){
            return view('admin.newsletter')->with('adnews',Newsletter::all()); 
        }

        public function deletenewsletter($id){
              $subcribedel = Newsletter::findorfail($id);
              $subcribedel->delete();

              return redirect()->route('news')->with('success','Subcriber Deleted Successfully');
        }
        //show send broadcast message
        public function showbroadcast(){
           
            return view('admin.sendbroadcast') 
                                             ->with('allemail', Newsletter::all());
        }
        
 //send broadcast message 
        public function sendbroadcast(Request $request){
          $request->validate([
            'subject' => ['required', 'string'],
            'message' => ['required','string']
        ]);

         
                  Mail::send(['html' => 'mails.mailsend'],[
                    'msg' => $request->message
                    ],function($subc)use($request){
                    $subc->from('no-reply@khulisaeducation.com','Khulisha Education'); 
                      foreach ($request->email as $emails) {                
                    $subc->to(explode(',',$emails));   
                      }                 
                    $subc->subject($request->subject);
                  });
                
              return redirect()->route('news')->with('success','Broadcast Message Sent Successfully');
        }
  
             //faq
     public function faqpage(){
      return view('admin.faq.index')->with('faqlist',Faq::all());
                                                                  
    }
    public function addfaq(Request $request){
      $request->validate([
         'name' => ['required','string'],        
         'body' => ['required','string'],
       ]);
          
       $posts = Faq::create([           
           'name' => $request->name,
           'body' => $request->body,  
           'faqid' => Str::random(5),
       ]);

       return redirect()->route('admin.faq')->with('success', 'Record created Successfully');
        }

        public function faqedit($id){
          return view('admin.faq.edit')->with('edfq',Faq::findorfail($id));
                                          
        }

           //update faq
            public function faqupdate(Request $request,$id){

                 $request->validate([
                  'name' => ['required','string'],
                  'body' => ['required','string'],
                
                ]);

           $fq = Faq::findorfail($id); 
        
           $fq->name = $request->name;
           $fq->body = $request->body;
          
           $fq->save();
       return redirect()->route('admin.faq')->with('success', 'Record Updated Successfully');
            }
            
            //delete faq
            public function faqdelete($id){

                  $faqdel = Faq::findorfail($id); 
        $faqdel->delete();
        //Comment::where('post_id',$posts->id)->delete();
         return redirect()->route('admin.faq')->with('success', 'Record Deleted Successfully');

            }


        public function qoutes(){
          return view('admin.quoterequest.qoute')->with('qut',Quote::all());
        }

        public function showquoterequest($id){
          Quote::findorfail($id)->update([
            'status' => 'seen'
          ]);
         return view('admin.quoterequest.show')->with('shqut',Quote::findorfail($id));
       }
       
       
        public function quotedelete($id){

               Quote::findorfail($id)->delete();         
       
              return redirect()->route('admin.roquote')->with('success', 'Record Deleted Successfully');

           }

        public function getnewquote(){
          $newqut = Quote::where('status','pending')->get();
          return count($newqut);
      }

      public function getordercount(){
        $getorder = array();
        $getorder[] = Order::where('status','pending')->count();
      
        return $getorder;
      }
}
