@extends('userpage.layouts.master')
@section('title','detail')
@section('main-content')

    <div class="container details">
        <div class="row mb-5">
            <div class="col-md-7 ppicture text-center">
                <img src="/picture/bomber.png" alt="">
                <hr>

                
                <div class=" smallpicture mt-2 ">
                <img class="me-2" src="/picture/bomber1.png" alt="">
                <img class="me-2" src="/picture/bomber1.png" alt="">
                <img class="me-2" src="/picture/bomber1.png" alt="">
                <img class="me-2" src="/picture/bomber1.png" alt="">

                
                <!-- <img src="/picture/mode.png" alt=""> -->
                </div>
            </div>

            <div class="col-md-5 des">
                <p><b>Product Name:</b> BOMBER JACKET WITH <br>
                    RANDY’S DONUTS™ PATCHES</p>
                <p class="unique">Varsity jacket made of combined fabrics, slightly padded on the inside. Jetted hip pockets and inside pocket detail. Contrast Randy’s Donuts™ patches on the front and back.</H5>
                <br>
                <div class="color d-flex">
                <h5><b>Color:</b> </h5>
                <div class="colorimg1"><img class="ms-2  " src="/picture/blue.png " alt=""></div>
                <div class="colorimg1"><img class="ms-2 " src="/picture/blue.png " alt=""></div>

            </div>
            <br>

            <form action="">
                <div class="d-flex prosize">
                    <h5><b>Size:</b></h5>
                    <div class="prosmall borders ms-2 me-3"> <b>S</b></div>
                    <div class="promedium borders me-3"> <b>M</b></div>
                    <div class="prolarge borders me-3"> <b>L</b></div>
                   </div>
            </form>
               <br>
                <div class="d-flex prosizeguide">
                <h6><b>Size Guide :</b> </h6>
                    <div class="prosmallsize ms-1 me-3 "> <b> 5'8'/S</b></div>
                    <div class="mediumsize me-3"> <b> 6'1'/M</b></div>
                    <div class="largesize me-3"> <b> 6'5'/L</b></div>
                    </div>
                    <br>
                <p><b>Price: 4000.</b></p>
                  <br>
                <p><b>Available</b></p>
                

             
                <div class="botton d-flex justify-content-center ">
                    <a href=""><button><b>Buy</b></button></a>
                    <button class="ms-4"><b>Cart</b></button>
    
            </div>
            <div class="prodetails">
                <p><b>COMPOSITION,CARE & ORIGINCOMPOSITION</b></p>
                   <p class="mt-0"> We work with monitoring programmes to ensure compliance with our social, environmental and health and safety standards for our garments. assess compliance, we have developed a programme of audits and continuous improvement plans.</p>
                   <div class="prodetails2 d-flex">
                    <button class="me-5">OUTER SHELL 100% polyester</button>
                    <button>LINING 100% polyester</button>

                    
                   </div>
            </div>
           
            </div>
        </div>
        <hr>
    </div>
    
  @endsection