@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
    <a href="#">Filter </a>
    </div>
    <div class="col-sm-4">
    <div class="trendding-warpper">
<h2>Result</h2>
@foreach ($products as $item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="trendding-img">
      <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['description']}}</h5>
      </div>
      </a>
    </div>
    @endforeach
</div>

    </div>
</div>
@endsection