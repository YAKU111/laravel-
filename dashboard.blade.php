<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
  </head>
 
  <body>
 
    <div class="conatiner-fluid">

        <div class="row">
            <div class="col-md-3  ">
                <div class="dashboard">
                <h4 class="ms-4">High-H0pes</h4>
                <hr>

                    <ul>
                        <li> <i class="fa-sharp fa-solid fa-gauge fa-xl mt-3" style="color: #ffffff;"></i><a href="" class="ms-2">Dashboard</a></li>

                        <li> <i class="fa-sharp fa-solid fa-file-invoice fa-xl mt-5 ms-1" style="color: #ffffff;"></i><a href="" class="ms-3 mt-4">Category</a></li>
                       
                        <li><i class="fa-sharp fa-solid fa-shirt fa-xl mt-5 ms-" style="color: #ffffff;"></i><a href="" class="ms-2">Products</a></li>


                        <li><i class="fa-sharp fa-solid fa-bag-shopping fa-xl mt-5 ms-1" style="color: #f2f2f3;"></i><a href="" class="ms-2">Orders</a></li>

                        <li><i class="fa-sharp fa-solid fa-truck-fast fa-xl mt-5 ms-1"  style="color: #ffffff;"></i><a href="" class="ms-2">Shipping</a></li>

                        <li><i class="fa-sharp fa-solid fa-users fa-xl mt-5 ms-1" style="color: #fcfcfc;"></i><a href="" class="ms-2">Users</a></li>

                        <li><i class="fa-sharp fa-regular fa-window-restore fa-xl mt-5 ms-1" style="color: #ffffff;"></i><a href="" class="ms-2">pages</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-3">
             <h3 class="mt-4">Dashboard</h3>
             <div class="totalsale border">
              <h5>Totalsale</h5>
              <h6>$700</h6>
             </div>
            </div>
            <div class="col-md-3 mt-3">
              <div class="totalcustomer border mt-5">
                <h5>Total Customer</h5>
                <h6>32</h6>
               </div>
            </div>
            <div class="col-md-3 mt-2 mt-3">
              <div class="totalorder mt-5 border mt-5">
                <h5>TotalOrder</h5>
                <h6>$700</h6>
               </div>
            </div>

        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>