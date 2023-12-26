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

            <div class="col-5 addcustom border ms-">
              <form action="{{Route('storeproductpage')}}" method="post" class="shadow p-3" enctype="multipart/form-data">
                <h2 class="text-center mb-4 addhead">Add product form</h2>
                @csrf
                <hr>
                @if(Session::has('msg'))
                <div class="alert alert-success">
                  {{Session::get('msg')}}
                </div>

                @endif

                  <div class="mb-2">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" id="pname" value="" class="form-control">
                    </div>
                    <div class="mb-2">
                      <label for="pcolor">Product color</label>
                      <input type="text" name="color" id="color" class="form-control">
                      </div>
                      
                        <div class="mb-2">
                          <label for="psize">Product Size</label>
                          <input type="text" name="size" id="size" class="form-control">
                          </div>
                          <div class="mb-2">
                            <label for="sguide">product Size Guide</label>
                            <input type="text" name="sguide" id="sguide" class="form-control">
                            </div>
                          <div class="mb-2">
                            <label for="price">Product price</label>
                            <input type="number" name="price" id="price" class="form-control">
                            </div>
                
                          <div class="mb-2">
                      <label for="available">Product Available</label>
                      <input type="text" name="available" id="available" class="form-control">
                      </div>
                      <label for="image">Product Image</label>
                      <input type="file" name="image" id="image" class="form-control">

                      <label for="image1">Product Image1</label>
                      <input type="file" name="image1" id="image1" class="form-control">

                      <label for="image2">Product Image2</label>
                      <input type="file" name="image2" id="image2" class="form-control">

                      <label for="image3">Product Image3</label>
                      <input type="file" name="image3" id="image3" class="form-control">
                      
                  <label for="pdescription">Description:</label>
                  <div class="div">
                  <textarea id="des" name="des" cols="45" rows="4" required></textarea>
                </div>
                <div class="addbtn">
                <input type="submit" value="Add" class="btn btn-light">
              </div>
                </form>
              </div>
                </div>

               
            
           



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>