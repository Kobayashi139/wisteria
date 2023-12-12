<x-app-layout>
     <body class='show'>
         
        <div class='title2'>
            <h2>タイトル</h2>
          {{ $scene->title }}
        </div>
        <div class="content">
            <p>{{ $scene->content }}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>