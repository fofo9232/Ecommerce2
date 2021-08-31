@extends('master')
@section('content')
<div class="custom-product">
       
        <div class="col-sm-10">
             <div class="trendding-warpper">
                 <h4> Result of Products</h4>
                 <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
                  @foreach($products as $item)
                  <div class=" row searched-item cart-list-divider">
                  <div class="col-sm-3">
                      <a href ="detail/{{$item->id}}">
                     <img class="trendding-img" src="{{$item->gallery}}">
        
                    </a>
                 </div>
              <div class="col-sm-3">
                         <div class="">
                              <h2>{{$item->name}}</h2>
                              <h5>{{$item->description}}</h5>
                          </div>
              </div>
              <div class="col-sm-3">
                      <a  href ="/remove/{{$item->cart_id}}"class="btn btn-warning"> Remove</a>
              </div>
        </div>
        @endforeach
        </div>
        
        <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
        </div>
 </div>

         
        
@endsection