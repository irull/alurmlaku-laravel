@extends('layouts.main')
@section('container')


    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <h1 class="mb-3 text-center">{{ $post->title}}</h1>

                <p> by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <div class="d-flex justify-content-start">
                <a href="/posts" class="d-block mt-3 btn btn-outline-info shadow-none">Back To Posts</a>
                </div>

            </div>
            <div class="col-md-4 mt-auto">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small>And some small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-muted">And some muted small print.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-muted">And some muted small print.</small>
                </a>
              </div>

                <div class="card text-dark mb-3 mt-2" style="max-width: 30rem;">
                        <div class="card-header">Category</div>
                        <div class="card-body">
                          <ol class="list-group list-group-numbered list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                              </div>
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                              </div>
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                              </div>
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                          </ol>
                        </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 30rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-dark bg-info mb-3" style="max-width: 30rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
    </div>
@endsection