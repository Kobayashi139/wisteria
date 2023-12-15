<x-app-layout>
     <body class='show'>
        <div class="title">
            <h1>タイトル</h1>
            <div class="showtitle">
              {{ $scene->title }}
            </div>
        </div>
        <div class="content">
            <h1>本文</h1>
            <p>{{ $scene->content }}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>