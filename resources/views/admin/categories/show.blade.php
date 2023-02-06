@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <p>
        {{ $category->description }}
    </p>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <img src="{{ asset("storage/{$post->uploaded_img}") }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Leggi</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection
