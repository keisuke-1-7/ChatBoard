@extends('layouts')

@section('content')

    <div class="container mt-4">
        @foreach($posts as $post)
        <div class="card col-lg-4 py-1 mt-4 bg-info text-light">
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
        </div>
        @endforeach
    </div>


@endsection('content')