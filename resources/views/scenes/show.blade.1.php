<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2 class='title2'>
             {{ $scene->title }}
        </h2>
        <div class="content">
            <p>{{ $scene->content }}</p>
        </div>
        
        <div classs="footer">
            <a href="/">戻る</a>
        </div>
    </body>