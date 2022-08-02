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
            <h1 class="h3 mb-4 text-gray-800">Show Skill Data <a class="btn btn-primary float-right"
                    href="{{ route('admin.skill.create') }}">Add Skill Data</a></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Skill</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Skill Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            <tr>
                                <th scope="row">{{ $skill->id }}</th>
                                <td>{{ $skill->skill }}</td>
                                <td>{{ $skill->percentage }}</td>
                                <td>{{ $skill->skill_type }}</td>
                                <td>
                                    <div class="col">
                                        <a href="{{ route('admin.skill.edit', [$skill->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.skill.delete', [$skill->id]) }}"
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
