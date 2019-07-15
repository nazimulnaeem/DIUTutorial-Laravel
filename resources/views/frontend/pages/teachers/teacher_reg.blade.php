

@extends('frontend.layouts.master')
@section('title')
Teacher Registration Page
@endsection

@section('content')

<div class="container-fluid registration" style="    margin-top: 0px;
             margin-bottom: 40px;
             padding-top: 30px;
             padding-bottom: 80px;
             background-image: url(img/bg2.jpeg);
             background-attachment: fixed;
             background-size: cover;
             ">
            <div class="container">
                <div class="row">
                    
                    <div class=" col-md-5"></div>

                    <div class="col-md-2"></div>
<!--                    <div class="text-white text-center d-flex align-items-center rgba-yellow-light py-5 px-4">-->
                    <div class=" col-md-5 text-black d-flex align-items-center rgba-grey-light py-5 px-4">
                        
                        <form method="POST" action="">
                            <h1 class="text-center"> Teacher Registration</h1>
                            <label class="label control-label">Teacher Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" name="t_name" placeholder="Name">
                            </div>
                             <label class="label control-label">Teacher_id</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="number" class="form-control" name="t_id" placeholder="Id number">
                            </div>

                            <label class="label control-label">Teacher_E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="email" class="form-control" name="mail" placeholder="E-mail">
                            </div>
                            <label class="label control-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="password" class="form-control" name="password" placeholder="*****">
                            </div>
                            <label class="label control-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="password" class="form-control" name="password_1" placeholder="*****">
                            </div>
                            <!--                            <a href="#"><div class="btn btn-light" name="btn">Submit</div></a>-->
                            <div>
                                <button type="submit" name="btn" class="btn btn-light">Submit</button>
                                <button type="reset" name="clear" class="btn btn-light">Clear</button>
                            </div>
                            <p style="color: white;">Already a member ? <a href="teacher_login.php">Signin</a></p>
                        </form>

                    </div>
<!--                </div>-->
                </div>

            </div>
        </div>

@endsection