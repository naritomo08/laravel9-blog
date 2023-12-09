@extends('layouts.app')

@section('title')
    <title>記事一覧 | {{config('app.name')}}</title>
@endsection

@section('header')
    <h1>記事一覧</h1>
@endsection

@section('content')

    <ul id="blog-menu">
        <li><a href="{{route('article.create')}}" class="btn">新規投稿</a></li>
   </ul>

    @foreach ($articles as $article)
        <article class="article">
            <a href="{{route('article.show', ['article' => $article->id])}}">
                <p>
                    @if ($article->created_at == $article->updated_at)
                        <time datetime="{{Str::limit($article->created_at, 20)}}">登録日時：{{Str::limit($article->created_at, 20, "")}}</time>
                    @else
                        <time datetime="{{Str::limit($article->created_at, 20)}}">登録日時：{{Str::limit($article->created_at, 20, "")}}</time>　<time datetime="{{Str::limit($article->updated_at, 20)}}">更新日時：{{Str::limit($article->updated_at, 20, "")}}</time>
                    @endif
                </p>
                <h3>{{$article->title}}</h3>
                <p>{{$article->content}}</p>
            </a>
        </article>
    @endforeach
@endsection