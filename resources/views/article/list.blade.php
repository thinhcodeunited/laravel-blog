@extends('layouts.app')

@section('content')
    <h1>Danh sach bai viet</h1>

    @foreach($list_articles as $article)
        <li>{{$article->title}}</li>
    @endforeach
    {{$list_articles->links()}}
        <div>
            From {{$hanoi}}
        </div>
@endsection
