<!--Start Portfolio-->
<section class="portfolio-page pad-tb why-choos-lg wow fadeIn" data-wow-delay=".2s">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-6">
                <div class="common-heading pp">
                    <span>Our Work</span>
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="filters">
                    <ul class="filter-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        @foreach($categories as $category)
                        <li data-filter=".{{ strtolower(str_replace(' ', '_', $category->category_name) ) }}">{{ $category->category_name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row card-list">
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-6 mt40 single-card-item {{ strtolower(str_replace(' ', '_', $project->category->category_name) ) }}">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{ $project->project_link }}"><img src="{{ asset('frontend/images/portfolio_placeholder.jpg') }}" data-src="{{ asset('storage/project_images') . '/' . $project->project_image }}" alt="image" class="img-fluid lazy" /></a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="{{ $project->project_link }}">{{ $project->project_name }}</a></h4>
                        <p>{{ $project->project_description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <a href="{{ route('portfolio.page')  }}" class="btn-main bg-btn3 lnk" target="_blank">View All Projects <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
    </div>
</section>
<!--End Portfolio-->
