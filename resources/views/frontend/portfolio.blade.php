@include('frontend.inc.header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfoio Details</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Portfoio Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/admin/project/img/' . $project->img_01) }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/admin/project/img/' . $project->img_02) }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/admin/project/img/' . $project->img_03) }}" alt="">
                            </div>



                        </div>
                        <div class="swiper-pagination">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $project->category->category }}</li>
                            <li><strong>Client</strong>: {{ $project->client }}</li>
                            <li><strong>Project date</strong>: {{ $project->project_date }}</li>
                            <li><strong>Project URL</strong>: <a href="#">{{ $project->project_url }}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $project->title }}</h2>
                        <p>
                            {{ $project->description }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@include('frontend.inc.footer')
