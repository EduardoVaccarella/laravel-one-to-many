@extends('layouts.app')

@section('pageTitle')
    Edit Post
@endsection

@section('content')
    <div class="create-wrapper">
        <div class="form-wrapper">
            <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                @csrf

                @method('PUT')
        
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $post->title }}">
        
                <label for="content">Content</label>
                <textarea type="text" name="content">{{ $post->content }}</textarea>

                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option value="{{ $post->category_id }}" selected>prova</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
        
                <input type="submit" value="Edita" id="buttonSbmt" class="button">

                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection