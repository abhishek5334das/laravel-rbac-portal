@extends('admin.layout.base')

@section('content')

    @include('admin.layout.header')
    @include('admin.layout.sidebar')

  <!-- Success Message -->
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left: 17%; margin-right: 6%; margin-top: 20px;">
      <strong>Success!</strong> {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif


   <!-- Create Button -->
   <div style="margin-left: 17%; margin-right: 6%; margin-top: 20px; text-align: right;">
    <a href="" class="btn btn-primary">Create New User</a>
</div>

    <!-- Blog List Table -->
    <div style="margin-left: 17%; margin-right: 6%; margin-top: 20px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $place)
                    <tr>
                        <td>{{ $place->id }}</td>
                        <td>{{ $place->name  }}</td>
                        <td>{{ $place->email }}</td>
                        <td>{{ $place->role }}</td>
                        {{-- <td>
                            <a href="{{ route('blogshow', $place->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('editblog', $place->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('deleteblog', $place->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-button">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <!-- Pagination -->
    <div style="margin-left: 17%; margin-right: 6%;">
        {{ $bloglists->links('pagination::bootstrap-4') }}
    </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });
    </script>
@endsection
