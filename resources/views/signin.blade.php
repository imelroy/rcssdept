@extends("theme")
@section("content")
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <table class="table table-borderless">
                <br><br><br>
                <h3><b><center>USER SIGN IN</center></b></h3>
                <br> <br>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-outline-danger">Sign in</button></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
@endsection