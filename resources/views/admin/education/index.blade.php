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
            <h1 class="h3 mb-4 text-gray-800">Show Education Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.education.create') }}">Add Education Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Degree</th>
                            <th scope="col">Session</th>
                            <th scope="col">Institute</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($educations as $education)
                            <tr>
                                <th scope="row">{{ $education->id }}</th>
                                <td>{{ $education->degree }}</td>
                                <td>{{ $education->session }}</td>
                                <td>{{ $education->institute }}</td>
                                <td>{{ $education->description }}</td>
                                <td>
                                    <div class="col">
                                        <a href="{{ route('admin.education.edit', [$education->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.education.delete', [$education->id]) }}"
                                            class="btn btn-danger">Delete</a>
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
