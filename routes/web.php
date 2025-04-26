<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PagesettingsController;
use App\Http\Controllers\Auth\AdminloginController;

//forntend
Route::get('/', [FrontendController::class, 'welcomepage'])->name('welcome');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'sendcontactmail'])->name('sendmail');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/blog', [FrontendController::class, 'blogpost'])->name('blog');
Route::get('/blog-details/{slug?}', [FrontendController::class, 'singles'])->name('singles');
Route::post('/addcomment', [FrontendController::class, 'addcomments'])->name('addcomments');
Route::post('/addreply', [FrontendController::class, 'replycomment'])->name('reply');
Route::get('/advisory', [FrontendController::class, 'advisory'])->name('adviso');
Route::get('/faq', [FrontendController::class,'faq'])->name('faq');
Route::get('/privacy', [FrontendController::class,'privacy'])->name('priv');
Route::get('/process', [FrontendController::class,'processes'])->name('proces');
Route::post('/newsletter', [FrontendController::class, 'newsletter'])->name('addnewsletter');
Route::get('/our-services', [FrontendController::class, 'service'])->name('ouservice');
Route::get('/our-services/{slug}', [FrontendController::class, 'services'])->name('services');
Route::post('/qoute/save', [FrontendController::class, 'qoute_save'])->name('qoutesave');
Route::get('/team-details/{id}', [FrontendController::class, 'team_details'])->name('tmdetials');

Route::get('/shop/{category?}', [FrontendController::class, 'shop'])->name('shp');

//cart and checkout 
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::get('/cart/checkout',[CartController::class,'checkout'])->name('checkout');
Route::get('/add-to-cart',[CartController::class,'addcart'])->name('addtocart');
Route::get('/cart-remove/{id}',[CartController::class,'remove_item'])->name('removeitem');
Route::post('/cart-update/{rowid}',[CartController::class,'update'])->name('cart.update');
Route::post('/cart/checkout/save',[CartController::class,'saveorder'])->name('storeorder');
Route::post('/pay-on-delivery',[CartController::class,'payondelivery'])->name('paydelivery');

Route::post('/stripe-payment', [CartController::class, 'stripeIntent'])->name('stripepay');
Route::get('/stripe-success', [CartController::class, 'stripeSuccess'])->name('stripesuccess');
Route::get('/stripe-cancel', [CartController::class, 'stripecancel'])->name('stripecancel');

Route::get('/thank-you',[CartController::class, 'ordercompleted'])->name('thnaku');

//admin 
Route::group(['prefix' => 'admin'],function(){
    Route::middleware(['guest'])->group(function () {
      Route::get('/login', [AdminloginController::class,'showadminlogin'])->name('login');
      Route::post('/login', [AdminloginController::class,'adminlogin'])->name('admin.login');
    });
  
    Route::get('/logout', [AdminloginController::class,'adminlogout'])->name('admin.logout');
  
   Route::middleware('auth')->group(function () {
      
      Route::get('/', [AdminController::class,'index'])->name('admin.dashboard');
      Route::get('/user', [AdminController::class,'adminuser'])->name('admin.user');
      Route::get('/user-create', [AdminController::class,'create'])->name('user.create');
      Route::post('/user-create', [AdminController::class,'store'])->name('newuser.store');
      Route::get('/change-password', [AdminController::class,'showchangepassword'])->name('password.change');
      Route::post('/change-password', [AdminController::class,'changepassword'])->name('change.pass');
      Route::get('/delete/{id}', [AdminController::class,'destroy'])->name('admin.delete');
      Route::get('/create_admin/{id}', [AdminController::class,'make_admin'])->name('make_admin');
      Route::get('/remove_admin/{id}', [AdminController::class,'not_admin'])->name('not_admin');
      Route::get('/contacts/emails/{id}', [AdminController::class,'contactdetails'])->name('cmsg');
      Route::get('/contacts/emails', [AdminController::class,'contacts'])->name('contact.mail');
      Route::post('/contacts/send/emails', [AdminController::class,'contacts_message'])->name('email.send');
      Route::get('/contacts/emails/delete/{id}', [AdminController::class,'deleteemails'])->name('email.delete');

      Route::get('/qoutes/request',[AdminController::class,'qoutes'])->name('admin.roquote');
      Route::get('/qoutes/get-qoute',[AdminController::class,'getnewquote'])->name('getrorqoute');
      Route::get('/qoutes/{id}',[AdminController::class,'showquoterequest'])->name('admin.roshowquote');
      Route::get('/qoutes/delete/{id}',[AdminController::class,'quotedelete'])->name('roquote.delete');
      Route::get('/qoutes/print/{id}',[AdminController::class,'roqtinvoice'])->name('roquote.print');

       //contact
       Route::get('/contact', [PagesettingsController::class,'contactpg'])->name('admin.contact')->middleware('auth');
       Route::post('/contact/save', [PagesettingsController::class,'contact_save'])->name('contact.save')->middleware('auth');
       //about
       Route::get('/about/bio', [PagesettingsController::class,'bio'])->name('about.bio')->middleware('auth');
       Route::post('/about/bio/save', [PagesettingsController::class,'save_bio'])->name('about.biosave')->middleware('auth');
      
       Route::get('/privacypg', [PagesettingsController::class,'privacy'])->name('privacy')->middleware('auth');
       Route::post('/privacy/save', [PagesettingsController::class,'save_privacy'])->name('privsave')->middleware('auth');
  
       Route::get('/termspg', [PagesettingsController::class,'terms'])->name('terms')->middleware('auth');
       Route::post('/terms/save', [PagesettingsController::class,'save_terms'])->name('trmssave')->middleware('auth');
  
       Route::get('/our-vision', [PagesettingsController::class,'vision'])->name('vision')->middleware('auth');
       Route::post('/vision-save', [PagesettingsController::class,'save_vision'])->name('vision.save')->middleware('auth');
       Route::get('/our-mission', [PagesettingsController::class,'mission'])->name('mission')->middleware('auth');
       Route::post('/mission-save', [PagesettingsController::class,'save_mission'])->name('mission.save')->middleware('auth');      
       
      //posts
      Route::get('/post', [PostsController::class, 'index'])->name('post.index');
      Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');
      Route::post('/post/store', [PostsController::class, 'store'])->name('post.store');
      Route::get('/post/{id}/edit', [PostsController::class, 'edit'])->name('post.edit');
      Route::post('/post/update/{id}', [PostsController::class, 'update'])->name('post.update');
      Route::get('/post/delete/{id}', [PostsController::class, 'destroy'])->name('post.delete');
      Route::post('/post/addcategory',[PostsController::class, 'addcateg'])->name('addcategory');
      
      Route::get('/news-letter',[AdminController::class,'managenewsletter'])->name('news');
      Route::get('/news/delete/{id}',[AdminController::class,'deletenewsletter'])->name('news.delete');
      Route::get('/broadcast',[AdminController::class,'showbroadcast'])->name('showbcast');
      Route::post('/sendbroadcast',[AdminController::class,'sendbroadcast'])->name('send.msg');
      
   
       //faq
      Route::get('/faq', [AdminController::class,'faqpage'])->name('admin.faq');
      Route::post('/faq', [AdminController::class,'addfaq'])->name('admin.addquest');
      Route::get('/faq/{id}/edit', [AdminController::class,'faqedit'])->name('faq.edit');
      Route::post('/faq/update/{id}', [AdminController::class,'faqupdate'])->name('faq.update');
      Route::get('/faq/delete/{id}', [AdminController::class,'faqdelete'])->name('faq.delete');
  
      //services
      Route::get('/services', [ServicesController::class,'index'])->name('ser.index');
      Route::get('services/create', [ServicesController::class,'create'])->name('ser.create');
      Route::post('services/store', [ServicesController::class,'store'])->name('ser.store');
      Route::get('services/{id}/edit', [ServicesController::class,'edit'])->name('ser.edit');
      Route::post('services/update/{id}', [ServicesController::class,'update'])->name('ser.update');
      Route::get('services/delete/{id}', [ServicesController::class,'destroy'])->name('ser.delete');

      //testimonial
      Route::get('/testimonial', [TestimonialController::class,'index'])->name('tes.index');
      Route::get('/testimonial/create', [TestimonialController::class,'create'])->name('tes.create');
      Route::post('/testimonial/store', [TestimonialController::class,'store'])->name('tes.store');
      Route::get('/testimonial/{id}/edit', [TestimonialController::class,'edit'])->name('tes.edit');
      Route::post('/testimonial/update/{id}', [TestimonialController::class,'update'])->name('tes.update');
      Route::get('/testimonial/delete/{id}', [TestimonialController::class,'destroy'])->name('tes.delete');

      Route::get('/shop/product', [ProductController::class,'index'])->name('product.index');
      Route::get('shop/product/create', [ProductController::class,'create'])->name('product.create');
      Route::post('shop/product/store', [ProductController::class,'store'])->name('product.store');
      Route::get('shop/product/{id}/edit', [ProductController::class,'edit'])->name('product.edit');
      Route::post('shop/product/update/{id}', [ProductController::class,'update'])->name('product.update');
      Route::get('shop/product/delete/{id}', [ProductController::class,'destroy'])->name('product.delete');

      //category
      Route::get('/category', [CategoriesController::class,'index'])->name('admin.category.index');
      Route::get('/category/create', [CategoriesController::class,'create'])->name('admin.category.create');
      Route::post('/category/store', [CategoriesController::class,'store'])->name('admin.category.store');
      Route::get('/category/{id}/edit', [CategoriesController::class,'edit'])->name('admin.category.edit');
      Route::post('/category/update/{id}', [CategoriesController::class,'update'])->name('admin.category.update');
      Route::get('/category/delete/{id}', [CategoriesController::class,'destroy'])->name('admin.category.delete');


      //orders
        Route::get('/order',[OrdersController::class,'index'])->name('admin.order.index');
        Route::get('/order/create', [OrdersController::class,'create'])->name('admin.order.create');
        Route::get('/order/confirm-order/{id}', [OrdersController::class,'confirm_order'])->name('admin.confirmorder');
        Route::get('/order/{id}', [OrdersController::class,'show'])->name('admin.order.show');
        Route::get('/order/preview/{id}', [OrdersController::class,'printpreview'])->name('admin.prntpg');
        Route::get('/order/productimg/{img}', [OrdersController::class,'showimg'])->name('admin.getimg');
        Route::get('/get-order-count', [AdminController::class,'getordercount'])->name('admin.getord');

        Route::get('/order/previewstore/{view}', [OrdersController::class,'storeview'])->name('admin.viewstoredetails');
        Route::post('/order/update/{id}', [OrdersController::class,'update'])->name('admin.order.update');
        Route::get('/order/delete/{id}', [OrdersController::class,'destroy'])->name('admin.order.delete');
   });
});