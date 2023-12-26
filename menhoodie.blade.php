@extends('userpage.layouts.master')
@section('title','MenHoodie')

@section('main-content')



        
       
    </style>
  </head>
  <body>

    <div class="container">
    <h2 class="text-center men">Men</h2>
    <div class="hoodie d-flex justify-content-center">
        <a href="{{route('menpage')}}" ><b>T-shirt</b></a>
        <a class=" ms-4" href=""><b>Hooide</b></a>
        <a class=" ms-4" href=""><b>Paint/joggers</b></a>

    </div>


    <!-- zero -->
    <div class="croimage d-flex justify-content-center mt-5">
      <div class="hoodiecard">
          <a href="/product3.html"> <img src="/picture/firhoodie.png" alt=""></a>
          <div class="card-body text-center">
            <div class="d-flex justify-content-around mb-0">
              <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
            </div>
          </div>
        </div>
        <!-- second -->
        <div class=" hoodiecard">
          <a href="/product3.html"> <img src="/picture/darkpink.png" alt=""></a>
          <div class="card-body text-center">
            <div class="d-flex justify-content-around mb-0">
              <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
            </div>
          </div>
        </div>
        <!-- third -->
        <div class=" hoodiecard">
          <a href="/product3.html"> <img src="/picture/sechoodie.png" alt=""></a>
          <div class="card-body text-center">
            <div class="d-flex justify-content-around mb-0">
              <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
            </div>
          </div>
        </div>
        </div>





    <!-- first -->

   <div class="croimage d-flex justify-content-center mt-5">
    <div class=" hoodiecard">
        <a href="/product2.html"> <img src="/picture/forhoodie.png" alt=""></a>
        <div class="card-body text-center">
          <div class="d-flex justify-content-around mb-0">
            <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
          </div>
        </div>
      </div>
      <!-- second -->
      <div class=" hoodiecard">
        <a href="/product3.html"> <img src="/picture/thihoodie.png" alt=""></a>
        <div class="card-body text-center">
          <div class="d-flex justify-content-around mb-0">
            <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
          </div>
        </div>
      </div>
      <!-- third -->
      <div class=" hoodiecard">
        <a href="/product3.html"> <img src="/picture/fifhoodie.png" alt=""></a>
        <div class="card-body text-center">
          <div class="d-flex justify-content-around mb-0">
            <p class="hoodieword">Casual flame shitr in nilan with cotton.</p>               
          </div>
        </div>
      </div>
      
   </div>

   <!-- second row -->
  

</div>
  
   

@endsection
  </body>
</html>