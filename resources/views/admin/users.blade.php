@extends ('admin.admin-app');
@section('content')
<span> your user number {{ Auth::user()->id }} of {{ count($users) }} users</span>
<hr>
<table class="table card-table table-responsive table-responsive-large" style="width:100%">
  <thead>
    <tr>
      <th>#</th>
      <th>User Name</th>
      <th class="d-none d-md-table-cell">Email </th>
      <th class="d-none d-md-table-cell">Status</th>
      <th class="d-none d-md-table-cell">Created at</th>
      <th>Status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach ($users as $user)

    <tr>
      <td>{{ $i++ }}</td>
      <td>
        <a class="text-dark" href=""> {{ $user->name }}</a>
      </td>
      <td class="d-none d-md-table-cell">{{ $user->email }}</td>
      <td class="d-none d-md-table-cell">{{ $user->email_verified_at }}</td>
      <td class="d-none d-md-table-cell">$230</td>
      <td>
        <span class="badge badge-success">{{ $user->created_at->diffForHumans() }}</span>
      </td>
      <td class="text-right">
        <div class="dropdown show d-inline-block widget-dropdown">
          <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
            <li class="dropdown-item">
              <a href="#">View</a>
            </li>
            <li class="dropdown-item">
              <a href="#">Remove</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>
@endsection