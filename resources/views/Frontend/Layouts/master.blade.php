<!DOCTYPE html>

<html lang="en">
<head>
@include('Frontend.Layouts.Partial.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 @include('Frontend.Layouts.Partial.navbar')
 @include('Frontend.Layouts.Partial.sidebar')


  <div class="content-wrapper">


   @yield('content')
  </div>

</div>

@include('Frontend.Layouts.Partial.script')
</body>
</html>
