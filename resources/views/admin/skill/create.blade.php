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
            <h1 class="h3 mb-4 text-gray-800">Add Skill Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.skill.show') }}">Show Skill Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.skill.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Skill</label>
                    <input type="text" class="form-control" placeholder="Enter Skill" name="skill"
                        value="{{ old('skill') }}">
                    <span class="text-danger">{{ $errors->first('skill') }}</span>
                </div>
                <div class="form-group">
                    <label>Percentage</label>
                    <input type="number" class="form-control" placeholder="Enter Your Skill Percentage"
                        name="percentage" value="{{ old('percentage') }}">
                    <span class="text-danger">{{ $errors->first('percentage') }}</span>
                </div>
                <div class="form-group">
                    <label>Skill Type</label> <br>
                    <input type="checkbox" name="skill_type" value="frontend"> Frontend
                    <input type="checkbox" name="skill_type" value="backend"> Backend
                    <span class="text-danger">{{ $errors->first('skill_type') }}</span>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
