<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Highhopes-@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- letter link -->
    <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=chubbo@700&display=swap" rel="stylesheet">
    <!-- fontawsom icone link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="animate.css">
    <!-- css link -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
    <!-- special edition font -->
    <link href="https://api.fontshare.com/v2/css?f[]=supreme@400&f[]=chubbo@700&display=swap" rel="stylesheet">


 

  </head>


<!-- header start here -->

<div class="marquee">
    <marquee behavior="" direction="">Welcome to High-Hopes clothing Brand website  --  You will get 5% discount in First Order.</marquee>
</div>

<!-- header end here -->



<!-- Navbar start here -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#"><img src="/picture/logo only.jpg" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><b>Men</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><b>Women</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('specialpage')}}"><b>Special edition</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><b>Portfolio</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"><b>Contact</b></a>
          </li>
         
        </ul>
        <div class="d-flex gap-2 indexpage" >
         <button class="btn btn-dark shadow-sm" ><a href="{{route('loginpage')}}">Login</a></button>
         <button class="btn btn-dark shadow-sm"><a href="{{route('registerpage')}}">SignUp</a></button>
        </div>
      </div>
    </div>
  </nav>

  <div class="search ">
    <form class="d-flex">
        <input class="form-control text-center border-0 border-bottom border-dark-subtle gap-2" placeholder="Search" width="20">
    </form>
  </div>
  



<!-- Navbar end here -->

<body>
    @yield('main-content')





 

    <!-- footer start -->



    <!-- footer end -->

    <div class="fu">
        <div class="container">
          <footer class=" footer py-5 text-center">
            <div class="row">
                <div class="col-3 ">
                    <h5>Customer service</h5>
                <p class="service ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, voluptatibus cum. Ipsa adipisci officiis ratione dicta deserunt odio tempora impedit nemo eligendi ea? Dignissimos, fuga.
                </p>
                </div>
                <div class="col-3">
                    <h5>useful link</h5>
                <ul class="nav flex-column">
                  <li class="min mb-2"><a href="#" class="nav-link p-0 ">Home</a></li>
                  <li class="min mb-2"><a href="#" class="nav-link p-0 ">Features</a></li>
                  <li class="min mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
                  <li class="min mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                  <li class="min mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
                </ul>
                   
                </div>
                <div class="col-3">
                <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="min mb-2"><a href="#" class="nav-link p-0 ">Home</a></li>
                        <li class="min mb-2"><a href="#" class="nav-link p-0 ">Features</a></li>
                        <li class="min mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
                        <li class="min mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                        <li class="min mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
                      </ul>
                </div>
                <div class="col-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="min mb-2"><a href="#" class="nav-link p-0 ">Home</a></li>
                      <li class="min mb-2"><a href="#" class="nav-link p-0 ">Features</a></li>
                      <li class="min mb-2"><a href="#" class="nav-link p-0 ">Pricing</a></li>
                      <li class="min mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                      <li class="min mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
                    </ul>
                </div>
        
            </div>
            <hr>
        
            <div class="text-center mt-5 ">
              <p class="mb-0">&copy; 2023 Company, High-Hopes. All rights reserved.</p>
              <p class="mt-0"> Website by High-Hopes Software development.</p>
            </div>
        
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
              </ul>
          </footer>


    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
</body>
</html>