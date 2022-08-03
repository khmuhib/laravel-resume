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
            <h1 class="h3 mb-4 text-gray-800">Show Contact Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.contact.create') }}">Add Contact Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Location</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Google Map link</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->location }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td>{{ $contact->map }}</td>
                            <td>
                                <div class="col">
                                    <a href="{{ route('admin.contact.edit', [$contact->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.contact.delete', [$contact->id]) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>


</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
