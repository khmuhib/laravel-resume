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
                            <strong>Welcome Back!</strong> {{ session('message') }}
                        </div>
                        
                    @endif

                    <h3>Hi Kh Muhib! Welcome to the dashboard</h3>
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
                    
                </div>
                <!-- /.container-fluid -->
@include('admin.inc.footer')