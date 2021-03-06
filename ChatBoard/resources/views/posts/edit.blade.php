@extends('layouts')

@section('content')

    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>
            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                {{csrf_field()}}
                {{method_field('PUT')}}

                <fieldset class="mb4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input id="title" name="title" type="text" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div>
                        <label for="body">
                            本文
                        </label>
                        <textarea name="body" id="body" rows="4" class="form-control">{{ $post->body }}</textarea>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{route('posts.show', ['post' => $post]) }}">
                            キャンセル
                        </a>
                        <button class="btn btn-primary" type="submit">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


@endsection('content')