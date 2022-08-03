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
            <h1 class="h3 mb-4 text-gray-800">Add Contact Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.contact.show') }}">Show Contact Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact.store') }}" method="post", enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" placeholder="Enter Location" name="location"
                        value="{{ old('location') }}">
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                        value="{{ old('email') }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" class="form-control" placeholder="Enter Your Contact" name="contact"
                        value="{{ old('contact') }}">
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                </div>
                <div class="form-group">
                    <label>Google Map Link</label>
                    <textarea type="text" class="form-control" placeholder="Enter Your Location Map link" name="map">{{ old('map') }}</textarea>
                    <span class="text-danger">{{ $errors->first('map') }}</span>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
