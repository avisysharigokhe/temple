<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vidyapati Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
   <link rel="stylesheet" href="{{asset('dist/css/admin.login.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0)"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  @if(Session::has('message'))

   <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> {{ Session::get('message') }}
  </div>
  @endif
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your Admin</p>

      <form action="{{url('submit_login')}}" method="post" enctype="multipart/form-data"  name="loginform">
        {!! csrf_field() !!}
        <div class="form-label-group">
          <label for="inputEmail">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <input type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" value="Login">
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

</body>
</html>
  <script type="text/javascript">
      $('form[name="loginform"]').validate({ // initialize the plugin
        rules: {
            emali: {
                required: true,
                email: true
            },
            password:{
              required:true,
              minlength:8,
              maxlength:20
            }
        },
        messages: {
            email: {
                required: "please enter email address",
                email: "please enter valid email address"
            },
            password:{
              required: "please enter password",
                minlength: "password should be at least 8 characters long",
                maxlength: "password must be with a maximum length of 20"
            }
        }
    });
  </script>