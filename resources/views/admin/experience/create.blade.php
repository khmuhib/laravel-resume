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
            <h1 class="h3 mb-4 text-gray-800">Add Experience Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.experience.show') }}">Show Experience Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.experience.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" placeholder="Enter Job Title" name="title"
                        value="{{ old('title') }}">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" class="form-control" placeholder="Enter Job Institute" name="company"
                        value="{{ old('company') }}">
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" placeholder="Enter Job Location" name="location"
                        value="{{ old('location') }}">
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                </div>
                <div class="form-group">
                    <label>From</label>
                    <input type="date" class="form-control" placeholder="Enter Your Starting Date" name="from"
                        value="{{ old('from') }}">
                    <span class="text-danger">{{ $errors->first('from') }}</span>
                </div>
                <div class="form-group">
                    <label>To</label>
                    <input type="date" class="form-control" placeholder="Enter Your Ending Date" name="to"
                        value="{{ old('to') }}">
                    <span class="text-danger">{{ $errors->first('to') }}</span>
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
