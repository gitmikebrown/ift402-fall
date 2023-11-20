@extends('layout')

@section('content')
   <div class="ResturantOptions">
      <div class="alert alert-primary" role="alert">
         Results
      </div>
      <div class="container">
         <div class="row">
            @foreach ($restaurant_results as $result)
            <div class="col-sm-3">
               <div class="card" style="width: 18rem;">
                  <div class="card-body">
                     <h5 class="card-title">{{$result->name}}</h5>
                     <!--<h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>-->
                     <p class="card-text">{{$result->description}}</p>
                     <a href="wf3?restaurant={{$result->restaurantID}}" class="card-link">View Menu</a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
 @endsection
