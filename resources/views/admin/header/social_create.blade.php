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
            <h1 class="h3 mb-4 text-gray-800">Add Social Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.header.social.show') }}">Show Social data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.header.social.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Enter Icon Class Name</label>
                    <input type="text" class="form-control" placeholder="ex: fa fa-home" name="icon">
                    <span class="text-danger">{{ $errors->first('icon') }}</span>
                </div>
                <div class="form-group">
                    <label>Enter your profile link</label>
                    <input type="text" class="form-control" placeholder="ex: www.facebook.com" name="link">
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                </div>
                <div class="form-group">
                    <label>Status</label> <br>
                    <input type="checkbox" name="status" value="1"> Active
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>


                <span class="text-danger d-block">Icon must using from ( <a
                        href="https://boxicons.com/">https://boxicons.com/</a> )</span>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
