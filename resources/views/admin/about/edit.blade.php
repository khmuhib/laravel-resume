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
            <h1 class="h3 mb-4 text-gray-800">Edit About Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.about.show') }}">Show About Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.about.edit',[$about->id]) }}" method="post", enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter Title" name="title"
                        value="{{ $about->title }}">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <div class="form-group">
                    <label>Sub Title</label>
                    <textarea type="text" class="form-control" placeholder="Sub title" name="subtitle">{{ $about->subtitle }}</textarea>
                    <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                </div>
                <div class="form-group">
                    <label>About Section Description</label>
                    <textarea type="text" class="form-control" placeholder="Short Description" name="short_description">{{ $about->short_description }}</textarea>
                    <span class="text-danger">{{ $errors->first('short_description') }}</span>
                </div>
                <div class="form-group">
                    <label>Birth Date</label>
                    <input type="date" class="form-control" placeholder="Birthday" name="birth"
                        value="{{ $about->birth }}">
                    <span class="text-danger">{{ $errors->first('birth') }}</span>
                </div>
                <div class="form-group">
                    <label>Website Link</label>
                    <input type="text" class="form-control" placeholder="Your Portfolio Link" name="link"
                        value="{{ $about->link }}">
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                </div>
                <div class="form-group">
                    <label>Degree</label>
                    <input type="text" class="form-control" placeholder="Your Heighest Degree" name="degree"
                        value="{{ $about->degree }}">
                    <span class="text-danger">{{ $errors->first('degree') }}</span>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Your active phone number" name="phone"
                        value="{{ $about->phone }}">
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your Email" name="email"
                        value="{{ $about->email }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="Your City" name="city"
                        value="{{ $about->city }}">
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                </div>
                <div class="form-group">
                    <label>Freelance</label>
                    <input type="text" class="form-control" placeholder="Yes or No" name="freelance"
                        value="{{ $about->freelance }}">
                    <span class="text-danger">{{ $errors->first('freelance') }}</span>
                </div>
                <div class="form-group">
                    <label>Long Description</label>
                    <textarea type="text" class="form-control" placeholder="Describe About You" name="long_description">{{ $about->long_description }}</textarea>
                    <span class="text-danger">{{ $errors->first('long_description') }}</span>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
