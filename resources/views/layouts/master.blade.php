
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Makoto Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
    {{-- JS --}}
    <script>
      window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <script src="/js/app.js"></script>
  </head>

  <body>

    @include('layouts.nav')
    @if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role='alert'>
      {{ $flash }}
    </div>
    @endif

    @include('layouts.header')

    <div class="container">
      <div class="row">

        @yield('content')

        @include('layouts.sidebar')

      </div><!-- /.row -->
    </div><!-- /.container -->

    @include('layouts.footer')

  </body>

</html>
