@extends('admin.admin-app')
@section('content')
  <div class="row mt-3">
    <div class="col-8">
      <div class="card">
        <div class="card-header text-center bg-dark text-white">
          <h4>All Categories</h4>
        </div><!-- card-header -->
        <div class="card-body">
          <table class="table table-bordered mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
              </tr>
            </thead>
            <tbody>
              @php($i=1)
              @foreach ($categories as $category)
              <tr>
                <td scope="row">{{$i++}}</td>
                <td>{{$category->user_id}}</td>
                <td>{{$category->category_name}}</td>
                <td>{{$category->created_at->diffForHumans()}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- card-body -->

        <div class="card-footer ">
          <h4>Total Of Categories : <span class="badge bg-dark">{{ count($categories) }}</span> </h4>
        </div><!-- card-footer -->
      </div><!-- card -->
    </div><!-- col-8 -->

    <div class="col-4">
      <div class="card">
        <div class="card-header text-center bg-dark text-white">
          <h4>Add Category</h4>
        </div><!-- card-header -->

        <div class="card-body text-center">
          <form action="" method="post">
            @csrf
            <input type="text" name="category_name" class="form-control form-control-lg mb-3">
            <button type="submit" class="btn btn-primary btn-lg mb-3">Add Category</button>
          </form>
        </div><!-- card-body -->
      </div><!-- card -->
    </div><!-- col-4 -->
  </div><!-- row -->
@endsection

