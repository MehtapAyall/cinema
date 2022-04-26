<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  @include('header')
  </head>
  <body>
      <div >
        @include('menu')
      </div><center>

            <div >
          @yield('content')
        </div>
        <div >
          @include('footer')
        </div>
  </body>
</html>
