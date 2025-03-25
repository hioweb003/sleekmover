@extends('layouts.admin')
@section('title')
    Products
@endsection


@section('content')
   
        
        
 
      <div class="card">
           <div class="card-header">
                 Product Attributes 
                </div>
                @include('includes.errors')
                <div class="card-body">
                  <div class="mb-5">
                     <div class="row">
                         <div class="col-md-8">
                           @if ($attrs ?? "")
                           <div class="row">
                               <div class="col-md-6">
                                  <p>Product Name: <span class="text-dark font-weight-bold">{{$attrs->pro_name}}</span></p>
                                 <p>Product Brand: <span class="text-dark font-weight-bold">{{$attrs->pro_brand}}</span></p>
                               </div>
                               <div class="col-md-6">
                                   <img src="{{asset($attrs->featured_image)}}" width="90px" height="90px" alt="{{$attrs->pro_name}}">
                               </div>
                           </div>
                            <form action="{{route('admin.addproductattr')}}" method="post">
                              @csrf
                              <div class="float-left mb-2">
                                 <a href="{{route('admin.product.index')}}" class="btn btn-outline-info btn-sm">Cancel</a>
                              </div>
                              <div class="float-right mb-2">
                                  <input type="submit" class="btn btn-success btn-sm px-4" id="shw" style="display: none" value="Save">&nbsp;<input type="button" class="px-4 btn btn-primary btn-sm" id="add" value="Add">
                              </div>
                              <table class="table-bordered table" id="">
                          <thead>
                              <tr>                                 
                                  <th>Size</th>
                                   <th></th>
                                 
                              </tr>
                          </thead>
                          <tbody id="tbod">
                          </tbody>
                      </table>
                      <input type="hidden" name="proid" value="{{$attrs->id}}">
                             </form>
                         
                           @endif
                         </div>
                         <div class="col-md-4"></div>
                     </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table-bordered table" id="tbs">
                          <thead>
                              <tr>
                                 <th>#</th>   
                                  <th>Sku</th>                                
                                  <th>Size</th>
                                   <th>Action</th>
                                 
                              </tr>
                          </thead>
                          <tbody>
                              @if (count($allattr)>0)
                               <?php $i=0;?>
                                  @foreach ($allattr as $atitem)
                                      <tr>
                                         <td>{{$i+1}}</td>
                                        <td class="siz{{$atitem->id}}">{{$atitem->size}}</td>
                                        <td>
                                           <a href="javascript:void(0)" onclick="attredit('{{$atitem->id}}')" class="btn btn-info btn-sm" title="Edit Attributes"><i class="fas fa-edit"></i></a>&nbsp;
                                           <a href="{{route('delproduct.attr',["id" => $atitem->id ])}}" onclick = "return confirm('Are you sure you want to delete this product attributes');" class="btn btn-danger btn-sm" title="Delete Attribute"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                     <?php $i++;?>
                                  @endforeach
                              @else
                                  <div class="alert alret-info">No Record Found Yet</div>
                              @endif
                              
                          </tbody>
                      </table>
                  </div>
                </div>
      </div>


       <!--Update record-->
   <div class="modal fade" id="updateattrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Attribute</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="updrec" method="post" action="{{route('admin.updateproduct.attr')}}">
        @csrf
       
        <div class="form-group">
          
           <div class="form-group">
               <label for="">Size</label>
            <input type="text" class="form-control" id="upsize"  name="size" placeholder="Enter Size" required value="">
          </div>
          {{-- <div class="form-group">
              <label for="">Stock</label>
            <input type="text" class="form-control" id="upsto"  name="stock" placeholder="Enter Stock" required value="">
          </div>
           <div class="form-group">
               <label for="">Price</label>
            <input type="text" class="form-control" id="uppri"  name="price" placeholder="Enter Price"  value="">
          </div> --}}
          
                <input type="hidden" class="form-control" id="upid"  name="id" placeholder="Address"  value="">
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-success updven" type="submit"><i class="fas fa-save fa-sm text-white-50"></i> Update</button>
    
        </div>
         </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
     <script>
         function attredit(id){
              $("#updateattrModal").modal();
           $("#upsize").val($(".siz"+id).text());
            // $("#upsto").val($(".st"+id).text());
            //  $("#uppri").val($(".pr"+id).text());            
          $("#upid").val(id);
         }

       $(document).ready(function(){
            $("#tbs").DataTable();

  $("#add").click(function(){
      $("#shw").show();
     let exp = new Date().getTime();      
      let html = "<tr id='trow"+exp+"'><td><input type='text' required name='size[]' placeholder='size' class='form-control'></td><td><span class='btn btn-danger btn-sm' id='remove"+exp+"'>&times;</span></td></tr>";

     $("#tbod").append(html); 

      $("#remove"+exp).click(function(){
       $("#trow"+exp).remove();
   });
  });

  
       });
    </script>

@endsection


                                        
                                           


                                             