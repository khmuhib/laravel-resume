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
            <h1 class="h3 mb-4 text-gray-800">Show Home Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.header.create') }}">Add Home Data</a></h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Skill 01</th>
                        <th scope="col">Skill 02</th>
                        <th scope="col">Skill 03</th>
                        <th scope="col">Skill 04</th>
                        <th scope="col">Skill 05</th>
                        <th scope="col">Profile Image</th>
                        <th scope="col">Backgroud Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($headers as $header)
                        <tr>
                            <th scope="row">{{ $header->id }}</th>
                            <td>{{ $header->name }}</td>
                            <td>{{ $header->skill_01 }}</td>
                            <td>{{ $header->skill_02 }}</td>
                            <td>{{ $header->skill_03 }}</td>
                            <td>{{ $header->skill_04 }}</td>
                            <td>{{ $header->skill_05 }}</td>
                            <td>
                                <img src="{{ asset('uploads/admin/header/img/' . $header->profile_img) }}"
                                    alt="dasda" height="50" width="50">
                            </td>
                            <td>
                                <img src="{{ url('uploads/admin/header/img/' . $header->bg_img) }}" alt="dasda"
                                    height="50" width="50">
                            </td>
                            <td>
                                <div class="col">
                                    <a href="{{ url('admin/header/edit/' . $header->id) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ url('admin/header/delete/' . $header->id) }}"
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
<!-- /.container-fluid -->
@include('admin.inc.footer')
