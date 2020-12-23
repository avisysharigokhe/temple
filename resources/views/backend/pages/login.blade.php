<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="{{asset('dist/css/admin.login.css')}}" rel="stylesheet">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form action="{{url('submit_login')}}" method="post" enctype="multipart/form-date" name="loginform">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="emali" id="email" class="form-control input_user" value="" placeholder="Email">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="password">
            </div>

            <div class="form-group">
              
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
                <input type="submit" name="login" value="Login" class="btn login_btn">
           </div>
          </form>
        </div>
    
        <div class="mt-4">
          
          <div class="d-flex justify-content-center links">
            <a href="{{url('forgot-password')}}">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
  <script type="text/javascript">
      $('form[name="loginform"]').validate({ // initialize the plugin
        rules: {
            emali: {
                required: true,
                email: true
            },
            password:{
              required:true,
              minlength:8
            }
        },
        messages: {
            email: {
                required: "Please enter email address",
                email: "Please enter valid email address"
            },
            password:{
              required: "Please enter password",
                minlength: "password should be atleast 8 character long"
            }
        }
    });
  </script>
</body>
</html>
