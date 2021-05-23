@extends('layouts')

@section('content')

    <div class="container mt-4">
        <div class="card bg-secondary p-2 my-4">
            <div class="card col-lg-4 py-1 bg-info text-light">
                        名前
            </div>
            <div class="card">
                <div class="card-header">
                        {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時
                    </span>
                </div> 
                <div class="mt-4 text-right">
                    <a class="btn btn-primary" href="{{route('posts.edit', ['post' => $post]) }}">
                        編集
                    </a>
                </div>       
            </div>
        </div>
    </div>


@endsection('content')