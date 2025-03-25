<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use App\Traite\CategoryTraite;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

  use CategoryTraite;
  
    public function index(){

      $categories = $this->categorys();

        $cartitem = Cart::content();
        return view('cart.index')->with('cartitems',$cartitem)
                                ->with('categories',$categories)
                                ->with('serstp',Service::all())
                                ->with('cont',Pagesetting::where('caption','contact page')->first());
    }

    //add to cart
    public function addcart(){
        // $price = "";
        // $newprice = "";
   
	 $product = Product::findorfail(request()->addtocart);

            $cart = Cart::add(array(
                'id' => $product->id, // inique row ID
                'name' => $product->pro_name,
                'price' => $product->price,
                'qty' => request()->qty ? request()->qty : '1',
                'weight' => 1,     
                'options' => array(
                  'size' => request()->size,  
                  'img' => $product->image
                ),
                 
            ))->associate($product);
   // dd(Request()->all()); 'associatedModel' => $product

     return redirect()->back()->with('success','Product Added To Cart');
    }
 
    //remove item from cart
    public function remove_item($id){
        Cart::remove($id);
       
             session()->forget('code');
             session()->forget('point');
        return redirect()->back()->with('success','Product Removed From Cart');
    }

    //update cart
     public function update($rowid){   
   
       $procheck = Product::findorfail(Request()->id);
      // $stock = ProductAttribute::select('stock')->where('product_id',$id)->sum('stock');
      // if(request()->cmd == "plus"){
     
      // }else{
      //   Cart::update($rowid,Request()->qty);
      // }
     
      if ($procheck->quantity < Request()->qty) {
        return redirect()->back()->with('error','Sorry! you can only order for '.$procheck->quantity.' quantity');
    }  

    Cart::update($rowid,Request()->qty);

        return redirect()->back()->with('success','Product quantity Updated');

    }

    //checkout page
    public function checkout(){

      $categories = $this->categorys();
      
      //dd(Cart::content());
         if (Cart::content()->count() == 0) {
           return redirect()->route('cart.index')->with('error','Sorry Your Cart is Empty');
        }
        return view('cart.checkout')->with('checkoutcart',Cart::content())
                                    ->with('categories',$categories)
                                    ->with('serstp',Service::all())
                                     ->with('cont',Pagesetting::where('caption','contact page')->first()); 
    }

    // decrease quantity from product quantity
public function decrease_increase_quantity(){
    $sold = 0;
     foreach (Cart::content() as $items) {
          $proid = Product::findorfail($items->model->id);
          $sold += $items->qty;
  
          $proid->update([
            'quantity' => $proid->quantity - $items->qty,
            'sold' => $sold
          ]);
  
     }
  }

     //order completed page
     public function ordercompleted(){
      $categories = $this->categorys();

        return view('cart.ordercomplete')->with('cont', Pagesetting::where('caption','contact page')->first())
                                       ->with('categories',$categories)
                                    ->with('serstp',Service::all());
     }
 
     public function payondelivery(Request $r,$transid=null){

        $order = Order::create([
         'order_number' => mt_rand('11111111','99999999'),
        'status' => 'pending',
         'is_paid' => $r->payment == 'creditcard' ? '1' : '0',
         'order_type' => $r->order_type,
         'payment_method' => $r->payment == 'payondelivery' ? 'bank transfer' : $r->payment,
         'paymentref' => $transid,
         'item_count' =>  Cart::count(),  //\Cart::getContent()->count(),
         'sub_total' => Cart::subtotal(),
         'grand_total' => $r->amount,
         'discount' => $r->discount,
         'discount_type' => $r->discounttype,
         'shipping_cost' => $r->shpcost,
         'shipping_name' => $r->first_name." ".$r->last_name,
         'shipping_email' => $r->email,
         'shipping_address' => $r->address,
         'shipping_phone' =>  $r->phone,
         'shipping_country' =>  $r->country,
         'shipping_state' => $r->state." ".$r->city,  
         'note' => !empty($r->note) ? $r->note : null  
        ]);
 
           
      $productarray = [];
        $cartitems = Cart::content();
        
        foreach ($cartitems as $items) {
            $order->items()->attach($items->id,['price' => $items->price * $items->qty, 'quantity' => $items->qty,'pro_attributes' => $items->options->size]);
        
            array_push($productarray,[
                'product' => $items->name,
                'price' => $items->price,
                'quantity' => $items->qty,
                'image' => $items->options->img,
            ]);

          }
 
         $this->decrease_increase_quantity();
 
         Cart::destroy();
 
        session()->forget('code');
        session()->forget('point');
         if(!empty($r->email)){
           $this->sendordermail($r->email,$r->name,$order->order_number,$productarray);
         }
        session()->forget('payload');
 
        return redirect()->route('thnaku')->with('success','Order Completed'); 
     }//pay on delivery



     public function saveOrder($transid=null){

      $order = Order::create([
        'order_number' => mt_rand('11111111','99999999'),
       'status' => 'pending',
        'is_paid' => '1',
        'order_type' => session()->get('payload')['order_type'],
        'payment_method' => session()->get('payload')['payment_method'],
        'paymentref' => $transid,
        'item_count' =>  Cart::count(),  //\Cart::getContent()->count(),
        'sub_total' => Cart::subtotal(),
        'grand_total' => session()->get('payload')['grand_total'],
        'discount' => session()->get('payload')['discount'],
        'discount_type' => session()->get('payload')['discount_type'],
        'shipping_cost' => session()->get('payload')['shipping_cost'],
        'shipping_name' => session()->get('payload')['shipping_name'],
        'shipping_email' => session()->get('payload')['shipping_email'],
        'shipping_address' => session()->get('payload')['shipping_address'],
        'shipping_phone' =>  session()->get('payload')['shipping_phone'],
        'shipping_country' =>  session()->get('payload')['shipping_country'],
        'shipping_state' => session()->get('payload')['shipping_state'],  
        'note' => session()->get('payload')['note']
      ]);

         
    $productarray = [];
      $cartitems = Cart::content();
      
      foreach ($cartitems as $items) {
          $order->items()->attach($items->id,['price' => $items->price * $items->qty, 'quantity' => $items->qty,'pro_attributes' => $items->options->size]);
      
          array_push($productarray,[
              'product' => $items->name,
              'price' => $items->price,
              'quantity' => $items->qty,
              'image' => $items->options->img,
          ]);

        }

       $this->decrease_increase_quantity();

       Cart::destroy();

      session()->forget('code');
      session()->forget('point');
       if(session()->get('payload')['shipping_email']){
         $this->sendordermail(session()->get('payload')['shipping_email'],session()->get('payload')['shipping_name'],$order->order_number,$productarray);
       }
      session()->forget('payload');

      return redirect()->route('thnaku')->with('success','Order Completed'); 

     }

     
     public function sendordermail($email,$nam,$ord,$productarray){
       $totprice = 0;
       $tprice = 0;
       $msg = "Your order has been completed, thanks for your patronage <br><br>Your order number is ".$ord."<br><br><br><h4 style='text-align:center'>Your Order Details</h4> <br><br>
         table style='width:100%;border:1px solid #ddd;'>
         <tr>
           <th style='text-align:left;padding:8px;'>Image</th>
           <th style='text-align:left;padding:8px;'>Product</th>
           <th style='text-align:left;padding:8px;'>Quantity</th>
           <th style='text-align:left;padding:8px;'>Price</th>
          </tr>
          </thead>
          <tbody>";
          foreach($productarray as $item){
            $tprice = $item['price'] * $item['quantity'];
            $totprice += $tprice;
            $msg .= "<tr>
            <td style='text-align:left;padding:8px;'><img src=".$item['image']."></td>
            <td style='text-align:left;padding:8px;'>".$item['product']."</td>
            <td style='text-align:left;padding:8px;'>".$item['quantity']."</td>
            <td style='text-align:left;padding:8px;'>CA$ ".number_format($tprice,2)."</td>
            </tr>";
          }
          $msg .= "
          <tr>
            <td colspan='4' style='text-align:left;padding:8px;'>Total</td>
            <td style='text-align:left;padding:8px;'>CA$ ".number_format($totprice,2)."</td>
          </tr>
          </tbody>
          </table>";

        Mail::send(['html' => 'mails.mailsend'],[
          'msg' => $msg,
       
          ],function($subc)use($email){
          $subc->from('no-reply@sleekmovers.ca','Sleekmovers');             
          $subc->to($email);                 
          $subc->subject("Order Completed");
        });
      }


      public function stripeIntent(Request $r){

        $r->validate([
          'first_name' => ['required','string'],
          'last_name' => ['required','string'],
          'email' => ['required','string','email'],
          'address' => ['required','string'],
          'phone' => ['required','string','numeric'],
          'country' => ['required','string'],
          'state' => ['required','string'],
        ]);

        session()->put('payload',[
          'order_number' => mt_rand('11111111','99999999'),
         'status' => 'pending',
          'is_paid' => $r->payment == 'creditcard' ? '1' : '0',
          'order_type' => $r->order_type,
          'payment_method' => $r->payment == 'payondelivery' ? 'bank transfer' : $r->payment,
          'item_count' =>  Cart::count(),  //\Cart::getContent()->count(),
          'sub_total' => Cart::subtotal(),
          'grand_total' => $r->amount,
          'discount' => $r->discount,
          'discount_type' => $r->discounttype,
          'shipping_cost' => $r->shpcost,
          'shipping_name' => $r->first_name." ".$r->last_name,
          'shipping_email' => $r->email,
          'shipping_address' => $r->address,
          'shipping_phone' =>  $r->phone,
          'shipping_country' =>  $r->country,
          'shipping_state' => $r->state." ".$r->city,  
          'note' => !empty($r->note) ? $r->note : null  
         ]);
     
        $cartitems = Cart::content();
        
        $lineItems = [];

          foreach ($cartitems as $item) {
              $lineItems[] = [
                  'price_data' => [
                      'currency' => 'CAD',
                      'product_data' => [
                          'name' => ucwords($item->name),
                      ],
                      'unit_amount' => intval($item->price * 100), // Convert to cents
                  ],
                  'quantity' => $item->qty,
              ];
          }

             $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

    $response = $stripe->checkout->sessions->create([
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('stripesuccess').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('stripecancel'),
                ]);

                //dd($response);
                if(isset($response->id) && $response->id != ""){
                    return redirect($response->url);
                }else{
                    return redirect()->route('stripecancel');
                }
     
    }

    public function stripeSuccess(Request $r){
        if(isset($r->session_id)){
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

        $response = $stripe->checkout->sessions->retrieve($r->session_id);
        
            $this->saveOrder($response->id);
            
            return redirect()->route('thnaku');

        }else{

            return redirect()->route('stripecancel');

        }
    }

    public function stripecancel(Request $r){
        return redirect()->route('checkout')->with('error','Payment Cancelled');
    }
}
