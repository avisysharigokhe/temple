<!DOCTYPE html>
<html @lang('en')>
<head>

 @include('backend/common/header')
 @include('backend/common/css')
  
</head>

<body id="hold-transition sidebar-mini layout-fixed" >

<div class="wrapper" >
   @include('backend/common/navbar')
  @yield('content')
</div>

  @include('backend/common/footer')
  @include('backend/common/bootsrap-modal')
  @include('backend/common/script')

@yield('script')
 </body>
</html>