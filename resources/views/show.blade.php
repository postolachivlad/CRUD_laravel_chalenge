@extends('layout')

@section('title', $article->title)

@section('content')
  <a  type="button" 
      class="btn btn-primary" 
      href="{{ route('articles.index') }}">
    Home Page
  </a>
  <div class="col-sm-12 mt-3">

    <div class="d-flex">
      <h6>News content:</h6>
      <p class="mx-3">{{$article->content}}</p>
    </div>
    <div class="d-flex">
      <h6>Created at:</h6>
      <p class="mx-3">{{$article->created_at->format('d/m/y H:i:s')}}</p>
    </div>
    <div class="d-flex">
      <h6>Updated at:</h6>
      <p class="mx-3">{{$article->updated_at->format('d/m/y H:i:s')}}</p>
    </div>
  </div>
 

  <form method="POST" action="{{ route('articles.destroy', $article) }}">
      <a type="button" class="btn btn-info" href="{{ route('articles.edit', $article) }}">Edit</a>
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
  </form>

@endsection