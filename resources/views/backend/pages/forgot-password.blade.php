<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="{{asset('dist/css/admin.login.css')}}" rel="stylesheet">
  <style type="text/css">

    .form-control:focus {
    color: red;
    background-color: #fff;
    border-color: red;
    outline: 0;
    box-shadow: none;
}
  </style>
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
          <form action="{{url('submit_forgot')}}" method="post" enctype="multipart/form-date" name="forgotform">
            
            <div class="form-group">
          <label for="exampleInputEmail1">Enter your email address and we will send you a link to reset your password.</label>
          <input type="text" name="email"  id="email" class="form-control form-control-sm" placeholder="Enter your email address">
        </div>
            <div class="form-group">
              
            </div>
              <div class="d-flex justify-content-center mt-3 login_container">
                <input type="submit" name="forgot" value="Send password reset email" class="btn login_btn">
          
           </div>
          </form>
        </div>
    
        <div class="mt-4">
          
          <div class="d-flex justify-content-center links">
            <a href="{{url('login')}}">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
  <script type="text/javascript">
      $('form[name="forgotform"]').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Please enter email address",
                email: "Please enter valid email address"
            }
        }
    });
  </script>
</body>
</html>
