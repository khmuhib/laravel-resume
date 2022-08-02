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
            <h1 class="h3 mb-4 text-gray-800">Add Project Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.project.show') }}">Show Project Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.project.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" class="form-control" placeholder="Enter Project Title" name="title"
                        value="{{ old('title') }}">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="form-group">
                    <label>Project Description</label>
                    <textarea type="text" class="form-control" placeholder="Enter Project Description" name="description">{{ old('description') }}</textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" placeholder="Enter Project Category" name="category"
                        value="{{ old('category') }}">
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                </div>
                <div class="form-group">
                    <label>Clinet</label>
                    <input type="text" class="form-control" placeholder="Client" name="client"
                        value="{{ old('client') }}">
                    <span class="text-danger">{{ $errors->first('client') }}</span>
                </div>
                <div class="form-group">
                    <label>Project Date</label>
                    <input type="date" class="form-control" placeholder="Project Date" name="project_date"
                        value="{{ old('project_date') }}">
                    <span class="text-danger">{{ $errors->first('project_date') }}</span>
                </div>
                <div class="form-group">
                    <label>url</label>
                    <input type="text" class="form-control" placeholder="Project Link" name="project_url"
                        value="{{ old('project_url') }}">
                    <span class="text-danger">{{ $errors->first('project_url') }}</span>
                </div>
                <div class="form-group">
                    <label>Image 01	</label>
                    <input type="file" class="form-control" placeholder="Portfolio Image 01" name="img_01">
                    <span class="text-danger">{{ $errors->first('img_01') }}</span>
                </div>
                <div class="form-group">
                    <label>Image 02	</label>
                    <input type="file" class="form-control" placeholder="Portfolio Image 02" name="img_02">
                    <span class="text-danger">{{ $errors->first('img_02') }}</span>
                </div>
                <div class="form-group">
                    <label>Image 03	</label>
                    <input type="file" class="form-control" placeholder="Portfolio Image 03" name="img_03">
                    <span class="text-danger">{{ $errors->first('img_03') }}</span>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
