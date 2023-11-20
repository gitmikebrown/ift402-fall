
@extends('layout')

@section('content')
  <div class="city">
    <div class="PageTitle">
      Menus
    </div>
    <div class="cityDropdown">
      <label for="cityDropdown">Select a City:</label>
      <select id="cityDropdown" onchange="location = this.options[this.selectedIndex].value;">
          <option value="none" selected disabled>Select a city</option>
          @foreach ($cities as $city)
          <option value="/wf2?city={{$city->city}}">{{$city->city}}</option>
          @endforeach
      </select>
    </div>
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
  @endsection

   