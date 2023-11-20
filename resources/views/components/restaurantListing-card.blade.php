@props(['restaurants'])

<div class="container text-center">
    <div class="row align-items-start">
       <div class="border border-success p-2 mb-2">
          <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">{{$restaurants->title}}</a>
          </li>
       </div>
       <div class="col">
          Option1
          <img src="..." class="rounded mx-auto d-block" alt="...">
       </div>
       <div class="col">
          Option2
          <img src="..." class="rounded mx-auto d-block" alt="...">
       </div>
       <div class="col">
          Option3
          <img src="..." class="rounded mx-auto d-block" alt="...">
       </div>
    </div>