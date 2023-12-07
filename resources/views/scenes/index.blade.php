<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <form action="/posts" method ="POST">
            <div class="contentpost">
                @csrf
                <div class="title">
                    <h1>タイトル</h1>
                    <input type="text" name="title[title]" value="" id="title">
                </div>
                <div class="content">
                    <h1>本文</h1>
                    <textarea name="content[content]" id=content></textarea>
                </div>
            </div>
            <input type="submit" value="投稿する">
        </form>
        
        <h2 class='title2'>
            <a href="/scenes/{{ $scene->id }}">{{ $scene->title }}</a>
        </h2>
    </body>