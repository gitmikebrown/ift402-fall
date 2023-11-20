@extends('layout')

@section('content')
<div class="container text-center">
   <div class="row align-items-start">
      <div class="col">
         {{$resturant[0]->name}}
      </div>
   </div>
</div>
<div class="container text-center">
<div class="row align-items-start">
   <div class="col">
      {{$resturant[0]->street}}
      {{$resturant[0]->city}}
      {{$resturant[0]->state}}
      {{$resturant[0]->zip}}  
   </div>
   <div class="col">
      {{$resturant[0]->phoneNumber}}  
   </div>
</div>
@foreach ($menu_items as $item)
<div class="container">
   <div class="card ">
      <div class="card-header">
         {{$item->itemName}}
      </div>
      <div class="card-body">
         <blockquote class="blockquote mb-0">
            <p>{{$item->description}}</p>
            <!--<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>-->
         </blockquote>
      </div>
   </div>
   <br>
</div>
@endforeach
@endsection