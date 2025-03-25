<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        return view('admin.orders.index')->with('order',Order::orderBy('created_at','DESC')->get())
                                          ->with('orders',Order::where('status','pending')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    $ord = Order::findorfail($id);
        $ord->status = "processing";
        $ord->save();
        return view('admin.orders.show')->with('orders',Order::where('status','pending')->get())
                                       ->with('order',$ord);
                                       
                                      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $deleteorder = Order::findorfail($id);
            $deleteorder->delete();
            DB::table('order_items')->where('order_id',$id)->delete();
        return redirect()->back()->with('success','Order Deleted');
    }

    public function confirm_order($id){
    
        $satu = Order::findorfail($id);
       
        $satu->status = 'completed';
        $satu->is_paid = '1';
        $satu->save();
  
        return redirect()->back()->with('success','Order completed');
    }

    public function printpreview($id){
         $ordprint = Order::findorfail($id);
        return view('admin.orders.printpage')->with('order',$ordprint)
                                           ->with('contpg', Pagesetting::where('caption','contact page')->first())
                                             ->with('orders',Order::where('status','pending')->get());
    }

    public function storeview($view){
        return view('admin.orders.storeview')->with('orders',Order::where('status','pending')->get());
                                            //  ->with('storedetails',Vendor::where('store_name',$view)->first());
    }

    public function showimg($img){
       return view('admin.orders.previewproductimage')->with('orders',Order::where('status','pending')->get())
                                                       ->with('imgget',Product::where('pro_name',$img)->first());
    }
}
