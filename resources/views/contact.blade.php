@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="tm-main-bg tm-contact-bg"></div>        
    </div>
</div>

<!-- Main -->
<main>
    <!-- Welcome section -->
    <section class="tm-welcome">
        <div class="row">
            <div class="col-12">
                <h2 class="tm-section-header tm-header-floating">Contact Information</h2>         
            </div>
        </div>

        <div class="row tm-welcome-row">
            <div class="col-lg-6 mb-5 tm-contact-box">
                <div class="tm-contact-form-wrap">
                    <form id="contact-form" action="" method="post" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>

                        <div class="form-group">
                            <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                                Send It Now
                            </button>
                        </div>
                    </form>
                </div>                    
            </div>
            <div class="col-lg-6 mb-5 tm-contact-box">
                <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <p class="mb-4">
                            <a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> HTML Template is free to download instantly from TemplateMo website. In dapibus dui vitae urna fringilla volupat.
                        </p>
                        <p class="mb-3">
                            120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil
                        </p>
                        <p class="mb-1">Tel: <a href="tel:0900100910" class="tm-link">090-010-0910</a></p>
                        <p>Email: <a href="mailto:info@company.com" class="tm-link">info@company.com</a></p>
                    </div>                    
                </div>                  
            </div>
        </div>

        <div class="row pb-5">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                </div>
            </div>
        </div>
        <div class="row pt-5 pb-5 mb-5">
            <div class="col-md-6 tm-contact-l">
                <h3 class="tm-article-title tm-color-primary">Fusce consectetur justo urna</h3>
                <p class="mb-4">Phasellus scelerisque, leo id dictum consectetur, dui felis ultrices ligula, at tristique sem elit ac eros.</p>
                <ul class="tm-ul-hyphen">
                    <li>Etiam varius faucibus elit, id ultrices</li>
                    <li>Nam condimentum tortor id dui</li>
                    <li>Quis faucibus lacus faucibus</li>
                    <li>Sed urna est, vulputate quis efficitur</li>
                </ul>
            </div>
            <div class="col-md-6 tm-contact-r">
                <h3 class="tm-article-title tm-color-primary">Nulla euismod nisi in ligula</h3>
                <p class="mb-4">Etiam iaculis urna finibus ante pharetra eleifend. Nulla
                    euismod nisi in ligula feugiat, in gravida erat tempus.
                    Nullam velit ante, semper in rhoncus non, fringilla vel
                    erat. In gravida dapibus massa non laoreet.</p>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>
    </section>

    <footer>
        Copyright &copy; 2020 New Vision 

        - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
    </footer>

</main>
@endsection