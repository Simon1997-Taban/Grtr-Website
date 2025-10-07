<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
@include('layouts.partials.navbar')
<body class="index-page">
  <main class="main">
    
    @yield('content')
  
  </main>
  <!-- Main Footer -->
  @include('layouts.partials.footer')
<!-- ./wrapper -->
@include('layouts.partials.footer-scripts')

</body>
</html>
