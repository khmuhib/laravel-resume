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
                    href="{{ route('admin.header.social.show') }}">Show Social Data</a></h1>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Enter Icon Class Name</label>
                    <input type="text" class="form-control" placeholder="ex: fa fa-home" name="icon"
                        value="{{ $social->icon }}">
                    <span class="text-danger">{{ $errors->first('icon') }}</span>
                </div>
                <div class="form-group">
                    <label>Enter your profile link</label>
                    <input type="text" class="form-control" placeholder="ex: www.facebook.com" name="link"
                        value="{{ $social->link }}">
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                </div>
                <div class="form-group">
                    <label>Status</label> <br>

                    @if ($social->status == 1)
                        <input type="checkbox" name="status" value="0" checked> Active
                    @else
                        <input type="checkbox" name="status" value="1"> Active
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
