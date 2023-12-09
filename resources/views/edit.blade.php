@extends('layouts.app')

@section('title')
    <title>記事編集 | {{config('app.name')}}</title>
@endsection

@section('header')
    <h1>記事編集</h1>
@endsection

@section('content')
    <form action="{{route('article.update', ['article' => $article->id])}}" method="post">
        @csrf
        @method('put')
        <ul>
            <li><input type="text" name="title" id="title" placeholder="記事タイトル" value="{{$article->title}}" required autofocus></li>
            <li><textarea name="content" placeholder="ここに内容を入力してください。" rows="5" required>{{$article->content}}</textarea></li>
            <li>
                <div>
                    <button type="submit">更新</button><br>
                    <button type="button" onclick="location.href='{{url()->previous()}}'">戻る</button>
                </div>
            </li>
        </ul>
    </form>
@endsection