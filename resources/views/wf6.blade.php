@extends('layout')

@section('content')
<div class="container">
   <div class="row m-auto">
      <div class="col-10">&nbsp;</div>
      <div class="col-4 border border-start-0 bg-body-tertiary " >
         <div class="restaurant_info">
            <!--<img src="" alt="Restaurant Image">-->
            <!--Add a img to src -->
            <h2>Chicken House</h2>
            <p>Email: you@me.com</p>
            <div class="contact_info">
               <h3>Contact Information</h3>
               <div><u>Address:</u></div>
               <div>{{$resturant[0]->street}}</div>
               <div>{{$resturant[0]->city}}, {{$resturant[0]->state}} {{$resturant[0]->zip}}</div>
               <br>
               <div><u>Phone:</u></div>
               <div>{{$resturant[0]->phoneNumber}} </div>
               <br>
               <div><u>Store Manager:</u></div>
               <div>Tom</div>
            </div>
         </div>
      </div>
      <div class="col-6 bg-body-tertiary ">
         <div class="add-buttons">
            <button><a href="/wf8">Add Item</a></button>
         </div>
         @foreach ($menu_items as $item)
         <div class="card">
            <div class="card-header">
         <div class="menu_item">
            <img src="" alt="Item Picture">
            <!--Add a img to src -->
            <h4>{{$item->itemName}}</h4>
            <p>{{$item->description}}</p>
            <p><a href="wf8?item={{$item->itemID}}">edit</a>
         </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection