@extends('layouts.app')
@section('title', $article->name)

@section('content')
    <h3>{{ $article->name }}</h3>
    <p>{{ $article->content }}</p>
    <div>
        <span class="badge badge-info">Posted {{ $article->created_at }} </span>
    </div>
@endsection
