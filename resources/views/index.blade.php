@extends('layout')

@section('title', 'News')

@section('content')
<i class="fas fa-camera"></i>
  <div class="col-sm-2">
    <a 
      class="btn btn-primary" 
      role="button" 
      href={{route('articles.create')}}>
        Create a post
    </a>    
  </div>
  

  <table class="table table-sm">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>
      @foreach($articles as $key=>$article)
          <tr>
              <th scope="row" class="col-sm-1">{{ $article->id }}</th>
              <td class="col-sm-3">
                  <h6>{{ Str::limit($article->title, 50) }}</h6>
              </td>
              <td class="col-sm-5">
                  <p>{{ Str::limit($article->content, 200) }}</p>
              </td>
              <td class="col-sm-3 text-center">
                  <form method="POST" action="{{ route('articles.destroy', $article) }}">
                      <a type="button" class="btn btn-info" href="{{ route('articles.edit', $article) }}">Edit</a>
                      <a type="button" class="btn btn-success" href="{{ route('articles.show', $article) }}">Read more</a>
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>

  {{ $articles->links() }}


@endsection