@extends('userpage.layouts.master')
@section('title','Register')

@section('main-content')


<div class="container reg1">
        <div class="row">
            <div class="col-6">
              <div class="regcontain">
                <h2 class="top1">Create Account </h2>
                <h2 class="down1"> To Discover the </h2>
                <h3 class="lowest1"> latest trende now.</h3>
                <div class="register-content">
                <form action="" method="post">

                  <i class="fa-solid fa-envelope"> <input type="email" id="email" name="email" class="form-input-style" placeholder="" required> </i>
                   <br>
                    <i class="fa-sharp fa-solid fa-user"> <input type="text" id="username" name="username" class="form-input-style" placeholder="" required> </i>
                    <br>
                    
                    <i class="fa-solid fa-lock"> <input type="text" id="username" name="username" class="form-input-style" placeholder="" required> </i>
                    <br>

                    <div class="terms1">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">I agree to these </label>
                        <!-- <a href="#">Forget password?</a>  -->
                     </div>
                     <div class="registerbtn">
                    <button  type="submit" value="login" onclick=""><b> Register</b> </button>
                  </div>
                    <div class="member1">
                          Already member of High-Hopes?
                         <a class="registerterms" href="loginpage.html"><b>Login here!</b> </a>
                         
                    </div>
                    </form>
            </div>
        </div>
    </div>

               <div class="col-6">
                <div class="regpic">
                <img  class="img-fluid" src="/picture/reg.png" alt="">
              </div>
               </div>      
                </div>
                </div>




@endsection