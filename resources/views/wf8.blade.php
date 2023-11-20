@extends('layout')

@section('content')
<div class="container">
   <h1 class="section_header">Item Edit</h1>
   <form>
      <div class="input-group input-group-lg">
         <span class="input-group-text" id="inputGroup-sizing-lg">Item Name:</span>
         <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="{{$item[0]->itemName}}">
      </div>
      <br>
      <div class="input-group">
         <span class="input-group-text">Description</span>
         <textarea class="form-control" aria-label="With textarea">{{$item[0]->description}}</textarea>
      </div>
      <br>
      <div class="add-buttons">
         <!--<button>Select from my Picture</button>-->
         <button class="btn btn-primary w-100 py-2" type="submit">Upload</button>
         <button class="btn btn-primary w-100 py-2" type="submit">Save</button>
      </div>
   </form>
</div>
@endsection