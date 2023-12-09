<x-app-layout>
     <body>
        <h2 class='title2'>
            <h2>タイトル</h2>
          {{ $scene->title }} 
        </h2>
        <div class="content">
            <p>{{ $scene->content }}</p>
        </div>
        <div classs="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>