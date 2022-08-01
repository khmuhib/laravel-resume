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
            <h1 class="h3 mb-4 text-gray-800">Show About Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.about.create') }}">Add About Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Subtitle</th>
                            <th scope="col">Section Description</th>
                            <th scope="col">Birth date</th>
                            <th scope="col">Website Link</th>
                            <th scope="col">Degree</th>
                            <th scope="col">Phone</th>
                            <th scope="col">City</th>
                            <th scope="col">Email</th>
                            <th scope="col">Freelance</th>
                            <th scope="col">About Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                        <tr>
                            <th scope="row">{{ $about->id }}</th>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->subtitle }}</td>
                            <td>{{ $about->short_description }}</td>
                            <td>{{ $about->birth }}</td>
                            <td>{{ $about->link }}</td>
                            <td>{{ $about->degree }}</td>
                            <td>{{ $about->phone }}</td>
                            <td>{{ $about->email }}</td>
                            <td>{{ $about->city }}</td>
                            <td>{{ $about->freelance }}</td>
                            <td>{{ $about->long_description }}</td>
                            <td>
                                <div class="col">
                                    <a href="{{ route('admin.about.edit',[$about->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.about.delete',[$about->id]) }}" class="btn btn-danger">Delete</a>
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
