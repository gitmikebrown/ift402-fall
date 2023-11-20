@extends('layout')

@section('content')
</head>
<body>
   <main>
      <h1>My Restaurant Pictures</h1>
      <div class="photo_container">
         <img src="" alt="Food Picture">
         <!--Add an img to src -->
         <p>3 Taco Dinner</p>
      </div>
      <div class="photo_container">
         <img src="" alt="Food Picture">
         <!--Add an img to src -->
         <p>Quesadilla Dinner</p>
      </div>
      <div class="upload-container">
         <input type="file" id="upload" accept="image/*">
         <label for="upload">Upload Image</label>
      </div>
   </main>
   @endsection