@extends('layout')

@section('content')
<div class="container">
   <aside>
      <div class="restaurant_info">
         <img src="" alt="Restaurant Image">
         <!--Add a img to src -->
         <h2>{{$resturant['name']}}</h2>
         <p>Email: {{$resturant['email']}}</p>
         <div class="contact_info">
            <h3>Contact Information</h3>
            <div><u>Address:</u></div>
            <div>{{$resturant['address_street']}}</div>
            <div>{{$resturant['address_city']}}, {{$resturant['address_state']}} {{$resturant['address_zip']}}</div>
            <br>
            <div><u>Phone:</u></div>
            <div>{{$resturant['phone_number']}}</div>
            <br>
            <div><u>Store Manager:</u></div>
            <div>{{$resturant['store_manager']}}</div>
         </div>
      </div>
   </aside>
   <main>
      <div class="add-buttons">
         <button><a href="/wf8">Item</a></button>
      </div>
      @foreach ($resturant_items as $item)
      <div class="menu_item">
         <img src="" alt="Item Picture">
         <!--Add a img to src -->
         <h4>{{$item['title']}}</h4>
         <p>{{$item['description']}}</p>
         <p><a href="#">edit</a>
      </div>
      @endforeach
   </main>
</div>
@endsection