<!doctype html>
<html @lang('en')>
<head>
 @include('frontend.common/head')
 @include('frontend.common/css')
</head>

<body>
   @include('frontend.common/nav')

<div>
  @yield('content')
</div>

  @include('frontend.common/footer')
  @include('frontend.common/script')

@yield('script')
 </body>
</html>