<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
          crossorigin="anonymous">
          
  </head>
  <body>
    <div class="content">
      <div class="row m-0">
        <div class="col-sm-8 mx-auto">
          <h1>@yield('title')</h1>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endisset
            @if(session('danger'))
                <div class="alert alert-danger">{{ session('danger') }}</div>
            @endisset
            @yield('content')
        </div>
      </div>
    </div>
    
  </body>
</http>