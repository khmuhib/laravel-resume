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
            <h1 class="h3 mb-4 text-gray-800">Add Education Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.education.show') }}">Show Education Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.education.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Degree</label>
                    <input type="text" class="form-control" placeholder="Enter Degree" name="degree"
                        value="{{ old('degree') }}">
                    <span class="text-danger">{{ $errors->first('degree') }}</span>
                </div>
                <div class="form-group">
                    <label>Session</label>
                    <input type="text" class="form-control" placeholder="Enter Your Session" name="session"
                        value="{{ old('session') }}">
                    <span class="text-danger">{{ $errors->first('session') }}</span>
                </div>
                <div class="form-group">
                    <label>Institute</label>
                    <input type="text" class="form-control" placeholder="Enter Your Institute" name="institute"
                        value="{{ old('institute') }}">
                    <span class="text-danger">{{ $errors->first('institute') }}</span>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" placeholder="Enter Your Description" name="description">{{ old('description') }}</textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
