@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="tm-main-bg tm-services-bg"></div>        
    </div>
</div>

<!-- Main -->
<main>
    <!-- Welcome section -->
    <section class="tm-welcome">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-header-floating">Our Digital Services</h2>         
            </div>
        </div>

        <div class="row tm-welcome-row tm-services">
            <div class="col-md-3 col-sm-6">
                <figure class="tm-services-img">
                    <img src="{{url('template/img/services-1.jpg')}}" alt="Image" class="img-fluid">        
                    <figcaption class="tm-service-description">Business Strategy</figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6">
                <figure class="tm-services-img">
                    <img src="{{url('template/img/services-2.jpg')}}" alt="Image" class="img-fluid">        
                    <figcaption class="tm-service-description">Digital Marketing</figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6">
                <figure class="tm-services-img">
                    <img src="{{url('template/img/services-3.jpg')}}" alt="Image" class="img-fluid">    
                    <figcaption class="tm-service-description">Social Platforms</figcaption>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6">
                <figure class="tm-services-img">
                    <img src="{{url('template/img/services-4.jpg')}}" alt="Image" class="img-fluid">    
                    <figcaption class="tm-service-description">New Media</figcaption>
                </figure>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small mb-5">Our unique approaches for you</h2>        
            </div>
        </div>
        <div class="row tm-approach-row">
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fab fa-4x fa-acquisitions-incorporated tm-service-icon"></i>
                        <div>
                            <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> Template is provided by TemplateMo website for 100% free of charge. You can use this CSS template for any purpose.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-certificate tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-chart-pie tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>         
                </div>
            </div>
            <div class="col-md-6">
                <div class="tm-approach-box">
                    <div class="tm-media tm-media-2 tm-media-v-center tm-solid-border">
                        <i class="fas fa-4x fa-anchor tm-service-icon"></i>
                        <div>
                            <p>Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <!-- Featured -->
    <section class="tm-featured">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-section-header-small mb-3">Our Strategic Partners</h2>        
            </div>
        </div>

        <div class="tm-partners mx-auto">
            <div>
                <img src="{{url('template/img/partner-01.png')}}" alt="Partner Image" class="img-fluid">
                <img src="{{url('template/img/partner-02.png')}}" alt="Partner Image" class="img-fluid">
                <img src="{{url('template/img/partner-03.png')}}" alt="Partner Image" class="img-fluid">
                <img src="{{url('template/img/partner-04.png')}}" alt="Partner Image" class="img-fluid">
                <img src="{{url('template/img/partner-05.png')}}" alt="Partner Image" class="img-fluid">    
            </div>

            <p class="tm-partner-text">Etiam et odio ut nibh suscipit eleifend. Sed facilisis, enim nec auctor vehicula, dolor odio venenatis turpis,
                eu vehicula ipsum ligula a nisi. Nam vel nulla sed enim imperdiet fermentum. Mauris venenatis imperdiet
                ex, quis rutrum orci vestibulum tristique. Ut gravida est ac risus dignissim sollicitudin. #999</p>

        </div>
    </section>

     @include('layout.footer')

</main>
@endsection