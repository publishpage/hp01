<!doctype html>
<html lang="ja">

  @include('layouts.head')
  
  <body>
    @include('layouts.header')
  
    @yield('contents')

    @include('layouts.footer')
  </body>
  
</html>
