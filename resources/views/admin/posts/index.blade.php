@extends('layouts.app')

@section('createBtn')
    @include('admin.partials.createBtn')
@endsection

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
                        <div class="btnWrapper">
                            <a href="{{ route('admin.posts.edit', $post->id) }}">
                                <span class="editBtn">
                                    Edit
                                </span>
                            </a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                @csrf
            
                                @method('DELETE')
            
                                <input type="submit" value="Delete" class="editBtn">
                            </form>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection