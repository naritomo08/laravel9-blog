@extends('layouts.app')

@section('title')
    <title>記事一覧 | {{config('app.name')}}</title>
@endsection

@section('header')
    <h1>記事一覧</h1>
@endsection

@section('content')
    <article class="article">
        <a href="#">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint impedit deleniti neque optio doloremque beatae illum iure officia, esse error quia consequuntur est molestiae aperiam fugit, nisi velit tempore eos.</p>
        </a>
    </article>

    <article class="article">
        <a href="#">
            <h3>Lorem ipsum dolor sit amet</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eum nihil dolor, eius in, assumenda recusandae ducimus porro animi cumque nostrum explicabo. Minima ratione ea mollitia nam animi ipsa cumque rerum, sed corporis quasi? Mollitia vero aliquid dolorem eligendi nesciunt.</p>
        </a>
    </article>

    <article class="article">
        <a href="#">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, blanditiis. Magnam eum unde adipisci nisi voluptates. Architecto necessitatibus voluptates nihil.</p>
        </a>
    </article>

    <article class="article">
        <a href="#">
            <h3>Lorem ipsum dolor sit amet</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, itaque.</p>
        </a>
    </article>

    <article class="article">
        <a href="#">
            <h3>Lorem, ipsum dolor</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore perferendis natus amet accusamus! Possimus, libero? Nihil nostrum molestias sed reiciendis delectus. Natus, debitis minus? Unde non expedita recusandae maxime vel id atque provident! Inventore quae cum ratione porro rem ab exercitationem expedita doloremque sit! Itaque error, in blanditiis iusto, aspernatur nobis ipsa voluptate sequi culpa soluta molestias, rerum optio officia!</p>
        </a>
    </article>
@endsection