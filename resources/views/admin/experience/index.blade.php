@include('admin.inc.header')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-4 text-gray-800">Show Experience Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.experience.create') }}">Add Experience Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Location</th>
                            <th scope="col">Starting Date</th>
                            <th scope="col">Ending Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $experience)
                        <tr>
                            <th scope="row">{{ $experience->id }}</th>
                            <td>{{ $experience->title }}</td>
                            <td>{{ $experience->company }}</td>
                            <td>{{ $experience->location }}</td>
                            <td>{{ $experience->from }}</td>
                            <td>{{ $experience->to }}</td>
                            <td>{{ $experience->description }}</td>
                            <td>
                                <div class="col">
                                    <a href="{{ route('admin.experience.edit', [$experience->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.experience.delete', [$experience->id]) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>


</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
