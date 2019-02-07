<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name' , 'MY JOURNAL')}}</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        

        
    </head>
    <body>

        @include('includes.navbar')


        <div class="container">
        @yield("content")

    </div>
        
    </body>
</html>
