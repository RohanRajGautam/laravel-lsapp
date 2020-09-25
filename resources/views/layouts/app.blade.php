<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{env('APP_NAME', 'RRG')}}</title>
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    </head>
    <body >
      @include('inc.navbar')
      <div class="container">
        @include('inc.messages')
        @yield('content')
      </div>

      {{-- ckeditor --}}
      <script>
        CKEDITOR.replace( 'article-ckeditor' );
       </script>
    </body>
</html>
