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
            <h1 class="h3 mb-4 text-gray-800">Add Category Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.category.show') }}">Show Category Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter Project Category" name="category"
                        value="{{ old('category') }}">
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
