@extends('master')
@section('content')
<div class="custom-product">
       
        <div class="col-sm-10">
             <div class="trendding-warpper">
                 <h4> My Orders</h4>
                  @foreach($orders as $item)
                  <div class=" row searched-item cart-list-divider">
                  <div class="col-sm-3">
                      <a href ="detail/{{$item->id}}">
                     <img class="trendding-img" src="{{$item->gallery}}">
        
                    </a>
                 </div>
              <div class="col-sm-3">
                         <div class="">
                              <h2>Name:{{$item->name}}</h2>
                              <h5>Delviery status:{{$item->status}}</h5>
                              <h5>Address: {{$item->address}}</h5>
                              <h5>Phone: {{$item->phone}}</h5>
                              <h5>Payment Method: {{$item->payment_method}}</h5>
                              <h5>price: {{$item->price}}</h5>
                          </div>
              </div>

        </div>
        @endforeach
        </div>
        </div>
 </div>

         
        
@endsection