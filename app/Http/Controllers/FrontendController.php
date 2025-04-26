<?php

namespace App\Http\Controllers;


use Closure;
use Carbon\Carbon;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Team;
use App\Models\Comment;
use App\Models\Culture;
use App\Models\Service;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Commitment;
use App\Models\Newsletter;
use App\Models\Pagesetting;
use App\Models\Testimonial;
use App\Models\Consultation;
use App\Models\Product;
use App\Models\Quote;
use App\Models\Replycomment;
use App\Traite\CategoryTraite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Cache\LockTimeoutException;

class FrontendController extends Controller
{

  use CategoryTraite;
  
    public function welcomepage(){
        
        return view('welcome')->with('abt',Pagesetting::where('caption','about page')->first())
                               ->with('cont',Pagesetting::where('caption','contact page')->first())
                               ->with('posts',Post::orderBy('id','DESC')->take(3)->get())
                               ->with('serstp',Service::all())
                               ->with('servs',Service::take(4)->get());
                               
    }
    public function contact(){
        $menus = $this->menu();
        $purpolar = $this->purpolarpost();
        return view('contact-us')->with('menus', $menus)
                            ->with('purps', $purpolar)
                            ->with('serstp',Service::all())
                            ->with('abt',Pagesetting::where('caption','about page')->first())
                               ->with('cont',Pagesetting::where('caption','contact page')->first());
    }

 public function thanksyou(){

    return view('thank-you')->with('serstp',Service::all())
                      ->with('cont',Pagesetting::where('caption','contact page')->first());

 }

    public function shop($category = null){

      $categories = $this->categorys();
  
        if($category){
          $cate = Category::where('slug',$category)->first();
            $products = Product::where('category_id',$cate->id)->orderBy('id','DESC')->paginate(12);
        }else{
            $products = Product::orderBy('id','DESC')->paginate(12);
        }

    return view('shop')->with('serstp',Service::all())
                        ->with('products',$products)
                        ->with('categories',$categories)
                        ->with('cont',Pagesetting::where('caption','contact page')->first());
    }  
    
    public function service(){

    return view('our-services')->with('serstp',Service::all())
                             ->with('cont',Pagesetting::where('caption','contact page')->first());
    }

    public function services($slug){

      $viewname = "";
        if($slug == "residential-moving"){

          $viewname = "residential-moving";

        }elseif($slug == "commercial-moving"){

          $viewname = "commercial-moving";
        
        }elseif($slug == "move-out-cleaning"){

          $viewname = "move-out-cleaning";

        }elseif($slug == "packing-services"){

          $viewname = "packing-services";
        
        }elseif($slug == "consulting"){

          $viewname = "consulting";

        }

    

      return view($viewname)->with('serstp',Service::all())
                                  ->with('serv',Service::where('slug',$slug)->first())
                                  ->with('posts',Post::orderBy('id','DESC')->take(3)->get())
                                ->with('cont',Pagesetting::where('caption','contact page')->first());

    }

    public function servicedetails($slug){
        $menus = $this->menu();
        $tit = str_replace("_"," ",$slug);
        return view('service_details')->with('abt',Pagesetting::where('caption','about page')->first())
                                     ->with('cont',Pagesetting::where('caption','contact page')->first())
                                      ->with('menus', $menus)
                                       ->with('serstp',Service::all())
                                      ->with('det',Service::where('title',$tit));
    }



   public function about(){
     
        return view('about-us') ->with('serstp',Service::all())
                            ->with('cont',Pagesetting::where('caption','contact page')->first())
                            ->with('abt',Pagesetting::where('caption','about page')->first())
                            ->with('testi',Testimonial::all());

    // ->with('mis',Pagesetting::where('caption','mission')->first())
    // ->with('vis',Pagesetting::where('caption','vision')->first())                           
    }

    //    public function team_details($id){
    //     return view('team_detail')->with('tem',Team::where('id',$id)->first())
    //                              ->with('cont',Pagesetting::where('caption','contact page')->first());
    // }

    // public function consulting(){
  
    //     return view('consulting')->with('prv', Pagesetting::where('caption','privacy')->first())
    //                                 ->with('serstp',Service::all())
    //                               ->with('cont', Pagesetting::where('caption','contact page')->first()); 
    // }


    // public function consulting_save(Request $r){
    //       $r->validate([
    //         'name' => ['required','string'],
    //         'email' => ['required', 'email:dns.rfc'],
    //         'service' => ['required', 'string'],
    //         'comment' => ['required'],
    //         'g-recaptcha-response' => ['required'],
    //     ]);

    //     $lock = Cache::lock('conslut',10);

    //    try {

    //     $lock->block(5);

    //           $time_is_ok = true;
    //           $consult = Consultation::whereDate('created_at', Carbon::now())->orderBy('id','DESC')->first();

    //           if($consult){
    //             $dbtimestamp = strtotime($consult->consult_time);
    //             $usertimestamp = strtotime($r->time);
    //                 if ($usertimestamp - $dbtimestamp < 3600) {
    //                     $time_is_ok = false;
    //                 }
    //           }
            
                    
    //           if($time_is_ok){

    //           $consult = Consultation::create([
    //               'name' => $r->name,
    //               'email' => $r->email,
    //               'service' => $r->service,
    //               'consult_time' => $r->time,
    //               'consult_date' => $r->date,
    //               'comment' => $r->comment
    //             ]);

    //               Mail::send(['html' => 'mails.mailsend'],[
    //                   'msg' => $r->name."<br>".$r->message
    //               ], function($mail) use($r){
    //                     $mail->from($r->email, $r->name);
    //                     $mail->to('support@dympnagroup.com');
    //                     $mail->subject('Dympna Consultation');
    //               });
                
    //               return redirect($r->redirect.'#appointmtform')->with('success','Appointment scheduled');
    //              //return ['status' => 'success', 'msg' => 'Appointment scheduled','email' => $r->email,'name' => $r->name,'uid' => $consult->id];

    //           }else{

    //             return redirect($r->redirect.'#appointmtform')->with('error','Sorry an appointment has been scheduled for this period');
               
                    
    //           }
              

    //         } catch (LockTimeoutException $e) {

    //           return redirect($r->redirect.'#appointmtform')->with('error','Sorry failed to process schedule');

    //       } finally {
    //           $lock->release();
    //       }
    
    // }


    public function processes(){

        return view('process')->with('prv', Pagesetting::where('caption','privacy')->first())
                                    ->with('serstp',Service::all())
                                  ->with('cont', Pagesetting::where('caption','contact page')->first()); 
    }
    public function privacy(){

        $menus = $this->menu();
        return view('privacy')->with('prv', Pagesetting::where('caption','privacy')->first())
                                   ->with('menus', $menus)
                                    ->with('serstp',Service::all())
                                  ->with('cont', Pagesetting::where('caption','contact page')->first()); 
    }

   
    public function faq(){
      return view('faq')->with('faqs',Faq::all())
                          ->with('serstp',Service::all())
                         ->with('title','Faqs')
                         ->with('cont', Pagesetting::where('caption','contact page')->first());                    
  }

  public function advisory(){
      return view('advisory')->with('posts',Post::orderBy('id','DESC')->take(3)->get())
                           ->with('adv', Pagesetting::where('caption','advisory')->first())
                            ->with('serstp',Service::all())
                          ->with('cont', Pagesetting::where('caption','contact page')->first());                   
  }

 
    public  function blogpost(){

        return view('blog')->with('serstp',Service::all())
                                ->with('abt',Pagesetting::where('caption','about page')->first())
                               ->with('cont',Pagesetting::where('caption','contact page')->first())
                            ->with('posts',Post::orderBy('id','DESC')->paginate(6))
                            ->with('recposts',Post::orderBy('created_at','DESC')->take(4)->get());
    }


  public function singles($slug){
       $posts = Post::where('post_slug', $slug)->first();
      $posts->increment('views');

       $purpolar = $this->purpolarpost();
       $menus = $this->menu();
      
       $next_id = Post::where('id', '>', $posts->id)->min('id');
       $prev_id = Post::where('id', '<', $posts->id)->max('id');
        return view('blog-single')->with('posts', $posts)
                               ->with('next', Post::find($next_id))
                               ->with('prev', Post::find($prev_id))
                               ->with('rect',$purpolar)
                               ->with('serstp',Service::all())
                               ->with('menus', $menus)
                               ->with('abt',Pagesetting::where('caption','about page')->first())
                               ->with('cont',Pagesetting::where('caption','contact page')->first())
                               ->with('recposts',Post::orderBy('created_at','DESC')->take(4)->get())
                               ->with('sinposts', Post::orderBy('id','DESC')->take(1)->get());
                             

    }

   public function addcomments(Request $request){
        $request->validate([
             'name' => ['required','string'],
             'email' => ['required', 'email'],
             'comment' => ['required'],
             'google_recaptcha_response' => ['required','string',function (string $attribute, mixed $value, Closure $fail) {
                $gresponse = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
                    'secret' => env("RECAPTCHA_SITE_SECRET_KEY"),
                    'response' => $value
                ])->json();
                if (!$gresponse["success"]) {
                    $fail("The {$attribute} is invalid.");
                }
            }]
          ]);

            Comment::create([
               'name' => $request->name,
               'email' => $request->email,
               'post_id' => $request->post_id,
               'description' => $request->comment
            ]);

            // return ['status' => 'success', 'msg' => 'comment sent successfully'];
        redirect($request->redirct)->with('success','comment sent successfully');
    }


   public function getcommentid(){

       if (Request()->ajax()) {
           $getid = Request()->id;
           $showid = Comment::findorfail($getid);
       }

       return response()->json($showid);

   }

    public function replycomment(Request $request){

      $request->validate([
            'reply' => ['required']
        ]);

        Replycomment::create([
          'comment_id' => $request->comment_id,
          'reply' => $request->reply
        ]);

      return redirect()->back()->with('success','Replied successfully');

    }

    public function sendcontactmail(Request $request){
        $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'message' => 'required',
             'phone' => 'required',
             'subject' => 'required',
             'google_recaptcha_response' => ['required','string',function (string $attribute, mixed $value, Closure $fail) {
                $gresponse = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
                    'secret' => env("RECAPTCHA_SITE_SECRET_KEY"),
                    'response' => $value
                ])->json();
                if (!$gresponse["success"]) {
                    $fail("The {$attribute} is invalid.");
                }
            }]
        ]);


      Mail::send(['html' => 'mails.mailsend'],[
            'msg' => $request->message."<br>".$request->phone
        ], function($mail) use($request){
              $mail->from($request->email, $request->name);
              $mail->to('info@sleekmovers.ca');
              $mail->subject($request->subject);
        });


        //return ['status' => 'success','msg' => 'Thanks for contacting us'];
       return redirect($request->redirect)->with('success','Thanks for contacting us');
    }

    //search
    public function search(Request $request){
       $request->validate([
          'seach' => 'required'
        ]);

         $purpolar = $this->purpolarpost();
       $menus = $this->menu();

        $query = $request->seach;
        $search = Post::where('post_title', 'like','%'.$query.'%')->get();
        return view('search')->with('queries',$search)
                             ->with('purps', $purpolar)
                             ->with('menus', $menus)
                             ->with('serstp',Service::all())
                             ->with('query',$query)
                             ->with('abt',Pagesetting::where('caption','about page')->first())
                               ->with('cont',Pagesetting::where('caption','contact page')->first());
    }

  //helpers methods
     public function purpolarpost(){
        $pposts = Post::orderBy('id', 'DESC')->take(4)->get();
        return $pposts;
    }
    
   public function menu(){
       $service = Service::take(6)->get();
        return $service;
    }

    //newsletter
  public function newsletter(Request $request){
    $request->validate([
        'email' => ['required','string','email'], 
        'google_recaptcha_response' => ['required','string',function (string $attribute, mixed $value, Closure $fail) {
            $gresponse = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
                'secret' => env("RECAPTCHA_SITE_SECRET_KEY"),
                'response' => $value
            ])->json();
            if (!$gresponse["success"]) {
                $fail("The {$attribute} is invalid.");
            }
        }]   
      ]);

      Newsletter::create([
          'email' => $request->email
      ]);
      
          return redirect($request->redirect)->with('newssucess','subcribe successfully');
    }

    public function qoute_save(Request $request){

        $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'address_from' => 'required',
             'address_to' => 'required',
             'phone' => 'required',
             'move_date' => 'required',
             'service_type' => 'required',
             'google_recaptcha_response' => ['required','string',function (string $attribute, mixed $value, Closure $fail) {
                $gresponse = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify",[
                    'secret' => env("RECAPTCHA_SITE_SECRET_KEY"),
                    'response' => $value
                ])->json();
                if (!$gresponse["success"]) {
                    $fail("The {$attribute} is invalid.");
                }
            }]
        ]);



        Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address_from' => $request->address_from,
            'address_to' => $request->address_to,
            'moving_date' => $request->move_date,
            'service' => $request->service_type,
            'note' => $request->note,
            'status' => 'pending'
        ]);

      Mail::send(['html' => 'mails.mailsend'],[
            'msg' => "Hello Admin, <br> A new quote request has been made by ".$request->name
        ], function($mail) use($request){
              $mail->from($request->email, $request->name);
              $mail->to('info@sleekmovers.ca');
              $mail->subject("New Quote Request");
        });


        //return ['status' => 'success','msg' => 'Thanks for contacting us'];
       return redirect($request->redirect)->with('success','Thanks for contacting us, we will get back to you soon');
    }
    
}
