@extends('layout')

@section('content')
<div class="container">
   <h1 class="section_header">Item Edit</h1>
   <div class="form-group">
      <label for="item_type">Select a title:</label>
      <select id="item_type">
         <option value="type1">Type 1</option>
         <option value="type2">Type 2</option>
         <option value="type3">Type 3</option>
      </select>
   </div>
   <div class="form_group">
      <label for="item_name">Item Name:</label>
      <input type="text" id="item_name">
   </div>
   <div class="form_group">
      <label for="item_description">Description:</label>
      <input type="text" id="item_description">
   </div>
   <div class="add-buttons">
      <button>Select from my Picture</button>
      <button>Upload</button>
      <button>Save</button>
   </div>
</div>
@endsection