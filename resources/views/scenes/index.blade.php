<x-app-layout>
    <body　class='home'>
        <div class="blank"></div>
        <form action="/scenes" method="POST">
            <div class="contentpost">
                @csrf
                <div class="title">
                    <h1>タイトル</h1>
                    <div class="scenetitle">
                    <input type="text" name="scene[title]" value="" id="title">
                    </div>
                </div>
                <div class="content">
                    <h1>本文</h1>
                    <div class="scenecontent">
                    <textarea name="scene[content]" id=content></textarea>
                    </div>
                </div>
                <input type="submit" value="投稿する">
            </div>
        </form>    
        
        <div class ="scenes">
            @foreach($scenes as $scene)
                <div class="scene">
                    <h2 class='scenestitle'>
                        <a href="/scenes/show/{{ $scene->id }}">{{ $scene->title }}</a>
                    </h2>
                </div>
            @endforeach
            <div class="blank"></div>
        </div>
    </body>
</x-app-layout>
