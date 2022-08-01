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
            <h1 class="h3 mb-4 text-gray-800">Edit Header Data<a class="btn btn-primary float-right"
                    href="{{ route('admin.header.show') }}">Show Home Data</a></h1>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.header.update', [$header->id]) }}" method="post",
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Your Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                        value="{{ $header->name }}">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Display Skill 01</label>
                    <input type="text" class="form-control" placeholder="Place Your Social Media Profile Link"
                        name="skill_01" value="{{ $header->skill_01 }}">
                    <span class="text-danger">{{ $errors->first('skill_01') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Display Skill 02</label>
                    <input type="text" class="form-control" placeholder="Place Your Social Media Profile Link"
                        name="skill_02" value="{{ $header->skill_02 }}">
                    <span class="text-danger">{{ $errors->first('skill_02') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Display Skill 03</label>
                    <input type="text" class="form-control" placeholder="Place Your Social Media Profile Link"
                        name="skill_03" value="{{ $header->skill_03 }}">
                    <span class="text-danger">{{ $errors->first('skill_03') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Display Skill 04</label>
                    <input type="text" class="form-control" placeholder="Place Your Social Media Profile Link"
                        name="skill_04" value="{{ $header->skill_04 }}">
                    <span class="text-danger">{{ $errors->first('skill_04') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Display Skill 05</label>
                    <input type="text" class="form-control" placeholder="Place Your Social Media Profile Link"
                        name="skill_05" value="{{ $header->skill_05 }}">
                    <span class="text-danger">{{ $errors->first('skill_05') }}</span>
                </div>
                <div class="form-group">
                    <label>Your Profile Image</label>
                    <input type="file" class="form-control" placeholder="Profile Image" name="profile_img">

                    <img src="{{ asset('uploads/admin/header/img/' . $header->profile_img) }}" alt="profile_img"
                        style="width: 150px; height: 150px;" class="img-thumbnail my-2">
                    <span class="text-danger d-black">{{ $errors->first('profile_img') }}</span>


                </div>
                <div class="form-group">
                    <label>Home Backgroud Image</label>
                    <input type="file" class="form-control" placeholder="Background Image" name="bg_img">

                    <img src="{{ asset('uploads/admin/header/img/' . $header->bg_img) }}" alt="profile_img"
                        style="width: 150px; height: 150px;" class="img-thumbnail my-2">
                    <span class="text-danger d-black">{{ $errors->first('bg_img') }}</span>

                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@include('admin.inc.footer')
