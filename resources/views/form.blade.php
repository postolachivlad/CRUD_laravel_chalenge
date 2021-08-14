@extends('layout')

@section('title', isset($article) ? 'Update post' : 'Create a post')

@section('content')
  <a  type="button" 
      class="btn btn-primary"
      href="{{ route('articles.index') }}">
        Home Page
  </a>
  <form method="POST"
        @if(isset($article))
          action="{{ route('articles.update', $article) }}"
        @else
          action="{{ route('articles.store') }}"
        @endif>
    @csrf
    @isset($article)
      @method('PUT')
    @endisset
    <div class="col-sm-12 mt-3"> 
      <input  name="title" 
              type="text"
              class="form-control" 
              placeholder="Please type here news Title" 
              value="{{ old('title', isset($article) ? $article->title : null) }}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror    
    </div>
    <div class="col-sm-12 mt-3">
      <input  name="content" 
              type="textarea"
              class="form-control"
              placeholder="Please type here news Content"
              value="{{ old('content', isset($article) ? $article->content : null) }}">
      @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror         
    </div>
    <input class="btn btn-success mt-3" type="submit">
  </form>
@endsection