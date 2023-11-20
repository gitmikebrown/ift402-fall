<!doctype html>
<html lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASU IFT402</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
 body {
     font-family: Calibri;
     font-size: 20px;
}
 header {
     background-color: #2d545e;
     color: White;
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding: 10px 20px;
}
 nav ul {
     list-style-type: none;
     padding: 0;
     margin: 0;
     display: flex;
}
 nav li {
     margin-right: 100px;
}
 nav a {
     text-decoration: none;
     color: white;
     font-weight: bold;
     color: white;
     border: solid #2d545e;
     cursor: pointer;
}
 .menu_button {
     display: block;
}
/*
 @media screen and (max-width: 768px) {
     .menu_button {
         display: block;
    }
     nav ul {
         flex-direction: column;
    }
     nav li {
         margin-right: 0;
         margin-bottom: 10px;
    }
}*/
 .logo {
     flex: 1;
}
 .logo img {
     max-width: 100px;
}
 .menu_button {
     background-color: #F7882F;
     color: White;
     padding: 10px 20px;
     border: solid;
     cursor: pointer;
}
 /*.container {
     text-align: center;
     margin: 120px auto;
     width: 300px;
}*/
 .PageTitle {
     display: flex;
     justify-content: center;
     align-items: center;
}
 .cityDropdown {
     display: flex;
     justify-content: center;
     align-items: center;
}
 .cuisineDropdown {
     display: flex;
     justify-content: center;
     align-items: center 
}

/*
.footer {
background-color: #2d545e; 
color: White; 
display: flex; 
align-items: center; 
justify-content: space-between; 
padding: 10px 20px;
position: absolute;
bottom: 0;
}*/
  </style>
  
  
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="/wf1"><img src="/images/laravel.png" class="rounded float-start" alt="..."></a>
        <div>ASU IFT402</div>
      </div>
      <nav>
        <ul>
          <li><a href="ownerLogin.html">Owner Login</a></li>
          <li><a href="restaurantProfile.html">Restaurant Profile</a></li>
          <li><a href="picRepository.html">Restaurant Pictures</a></li>
          <li><a href="itemEdit.html">Item Edit</a></li>
        </ul>
      </nav>
      <div class="menu_button">Menu</div>
  </header>
  <main>
    @yield('content')
  </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
        
          <div><a href="/wf1">WF1</a></div>
          <div><a href="/wf2">WF2</a></div>
          <div><a href="/wf3">WF3</a></div>
          <div><a href="/wf4">WF4</a></div>
          <div><a href="/wf5_login">WF5 Login</a></div>
          <div><a href="/wf5_register">WF5 Register</a></div>
          <div><a href="/wf6?restaurant=10016">WF6</a></div>
          <div><a href="/wf7">WF7</a></div>
          <div><a href="/wf8">WF8</a></div></div>

       
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
  
  </body>
</html>