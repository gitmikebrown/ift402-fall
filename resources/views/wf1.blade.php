
@extends('layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
  <div class="city">
    <div class="PageTitle">
      Menus
    </div>
    <form>
    <div class="form-group cityDropdown">
      <label class="control-label for="cityDropdown">Select a City:</label>
      <select class="form-select form-select-lg mb-3" aria-label="Default select example" id="cityDropdown" onchange="location = this.options[this.selectedIndex].value;">
          <option value="none" selected disabled>Select a city</option>
          @foreach ($cities as $city)
          <option value="/wf2?city={{$city->city}}">{{$city->city}}</option>
          @endforeach
      </select>
    </div>
    </form>
    <!--
    <div class="cuisineDropdown">
      <label for="cuisineDropdown">Select a Cuisine:</label>
      <select id="cuisineDropdown">
          <option value="none" selected disabled>Select a cuisine</option>
          @foreach ($cuisines as $cuisine)
          <option value="{{$cuisine->name}}">{{$cuisine->name}}</option>
          @endforeach
      </select>
    </div>-->
  </div>
    </div></div>

</div>

  @endsection

   