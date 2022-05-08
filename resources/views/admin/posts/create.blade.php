@extends('layouts.app')

@section('pageTitle')
    Create Post
@endsection

@section('content')
    <div class="create-wrapper">
        <div class="form-wrapper">
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
        
                <label for="title">Title</label>
                <input type="text" name="title">
        
                <label for="description">Content</label>
                <textarea type="text" name="content"></textarea>
        
                <input type="submit" value="Invia" id="buttonSbmt" class="button">

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