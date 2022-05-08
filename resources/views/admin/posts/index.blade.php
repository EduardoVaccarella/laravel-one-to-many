@extends('layouts.app')

@section('content')
    <div class="main">
        @foreach ($posts as $post)
            <div class="card">
                <a href="{{ route('admin.posts.show', $post->id) }}">
                    <h4>
                        {{ $post['title'] }}
                    </h4>
                    
                    <p>
                        {{ $post['content'] }}
                    </p>

                    <div>
                        <span>
                            delete
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection