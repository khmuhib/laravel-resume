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
            <h1 class="h3 mb-4 text-gray-800">Show Project Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.project.create') }}">Add Project Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Clinet</th>
                            <th scope="col">Project Date</th>
                            <th scope="col">url</th>
                            <th scope="col">Image 01</th>
                            <th scope="col">Image 02</th>
                            <th scope="col">Image 03</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    {{ $project->category->category }}
                                </td>
                                <td>{{ $project->client }}</td>
                                <td>{{ $project->project_date }}</td>
                                <td>{{ $project->project_url }}</td>
                                <td>
                                    <img src="{{ asset('uploads/admin/project/img/' . $project->img_01) }}"
                                        alt="ffas" height="50" width="50">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/admin/project/img/' . $project->img_02) }}"
                                        alt="ffas" height="50" width="50">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/admin/project/img/' . $project->img_03) }}"
                                        alt="ffas" height="50" width="50">
                                </td>
                                <td>
                                    <div class="col">
                                        <a href="{{ route('admin.project.edit', [$project->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.project.delete', [$project->id]) }}"
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
