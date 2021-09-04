@extends('dashboard.layouts.main')

@section('container') 
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3">{{ $post->title }}</h1>
        <a href="/dashboard/posts" class="btn btn-success shadow-none"><i class="bi bi-chevron-left"></i> Back to my all Posts</a>
        <a href="" class="btn btn-warning shadow-none"><i class="bi bi-pencil-square"></i> Edit</a>
        <a href="" class="btn btn-danger shadow-none"><i class="bi bi-exclamation-lg"></i> Delete</a>

      <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>
@endsection
