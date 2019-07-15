

@extends('frontend.layouts.master')
@section('title')
Teacher Login Page
@endsection

@section('content')

<div class="container-fluid registration" style="    margin-top: 0px;
             margin-bottom: 40px;
             padding-top: 30px;
             padding-bottom: 80px;
             background-image: url(img/bg6.jpg);
             background-attachment: fixed;
             background-size: cover;
             ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7"></div>

                    <!--                    <div class="register col-md-5">-->
                    <div class=" col-md-4 text-white d-flex align-items-center rgba-grey-light py-5 px-4">
                        <form method="post" action="">
                            <h1 class="text-center">Teacher Login</h1>

                            <label class="label control-label">Teacher Id</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="number" class="form-control" name="t_id" placeholder="Id number" >
                            </div>
                            <label class="label control-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="password" class="form-control" name="password" placeholder="*****">
                            </div>

                            <!--                        <a href="#"><div class="btn btn-light">Login</div></a>-->
                            <div>
                                <button type="submit" name="btn" class="btn btn-light">Login</button>
                                <button type="reset" name="clear" class="btn btn-light">Clear</button>
                            </div>
                            <p style="color: white;">Not yet a member ? <a href="teacher_reg.php">Signup</a></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>

@endsection