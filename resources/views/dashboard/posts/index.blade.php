@extends('dashboard.layouts.main')

@section('container') 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Create new post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)  
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td class="responsive">
          <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm bg-info rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View"><i class="bi bi-eye"></i> View</a>
          <a href="" class="btn btn-sm bg-warning rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-square"></i> Edit</a>
          <a href="" class="btn btn-sm bg-danger rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-x-lg"></i> elete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
