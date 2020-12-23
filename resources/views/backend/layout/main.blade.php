<!DOCTYPE html>
<html @lang('en')>
<head>
 @include('backend/')
 @include('partials/_css')
</head>

<body id="page-top" >
   @include('partials/_nav')

<div >
  @yield('content')
</div>

  @include('partials/_footer')
  @include('partials/_script')

@yield('script')
 </body>
</html>