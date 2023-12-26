@extends('userpage.layouts.master')
@section('title','Login')

@section('main-content')


<div class="container first">
        <div class="row">
            <div class=" hello col-6 mt-5 ">
                <div class="fi">
                    <img src="/picture/neww.png" alt="">
                </div>
            </div>
            <div class="col-6  third mt-5">
                <div class="se">
                    <h2 class="top">High-Hopes! </h2>
                    <h2 class="down">Discover the </h2>
                    <h3 class="lowest"> latest trende now.</h3>
                    <div class="login-content">
                    <form action="" method="post">
                        <i class="fa-sharp fa-solid fa-user"> <input type="text" id="username" name="username" class="form-input-style" placeholder="" required> </i>
                        <br>
                        <i class="fa-solid fa-lock"> <input type="text" id="username" name="username" class="form-input-style" placeholder="" required> </i>
                        <br>
                        <div class="terms">
                            <a href="#" class="termss">Forget password?</a> 
                         </div>
                         <div class="loginbtn">
                            <button type="submit" value="login"><b> Log in</b> </button>
                        </div>
                        <div class="member">
                              Not a member of High-Hopes
                             <a href="{{route('registerpage')}}" class="termss"><b>Register here!</b> </a>
                             
                        </div>
                        
                        
                        

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>








@endsection