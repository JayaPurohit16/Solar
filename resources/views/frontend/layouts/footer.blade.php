<section class="marquee-sec">
    <marquee onmouseover="this.stop();" onmouseout="this.start();" class="ticker-left">GENERATE YOUR OWN POWER REAP
        THE RETURNS HEAL THE WORLD EFFICIENCY & POWER 24*7 N POWER REAP THE RETURNS HEAL THE WORLD EFFICIENCY &
        POWER 24*7 SUPPORT SUPPORT REAP THE RETURNS HEAL THE WORLD EFFICIENCY</marquee>
</section>

@php
    $cms = App\Models\Cms::first();
@endphp


<footer>
    <div class="footer-bg-img coomen-index-padding">
        <div class="container">
            <div class="footer-borbottom">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="section-sec-card footer-sec">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/image/svg/footer-svg.svg') }}   " alt="">
                            </div>
                            <div class="card-text footer-card-text">
                                <p>Support & Email</p>
                                <span>{{ isset($cms->support_email) ? $cms->support_email : '' }}</span>
                                {{-- <span>info@domainname.com</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <div class="section-sec-card footer-sec">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/image/svg/footer-svg-1.svg') }}" alt="">
                            </div>
                            <div class="card-text footer-card-text">
                                <p>Customer Support</p>
                                <span>{{ isset($cms->customer_support) ? $cms->customer_support : '' }}</span>
                                {{-- <span>+01 547 547 5478</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="section-sec-card footer-sec">
                            <div class="card-img">
                                <img src="{{ asset('frontend/assets/image/svg/footer-svg-2.svg') }}" alt="">
                            </div>
                            <div class="card-text footer-card-text">
                                <p>Our Location</p>
                                <span>{{ isset($cms->our_location) ? $cms->our_location : '' }}</span>
                                {{-- <span>Street no, City, Country 123456</span> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-list">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-list-text">
                            @if (isset($cms->footer_logo) && file_exists(public_path('Cms/FooterLogo/' . $cms->footer_logo)))
                                <img src="{{ asset('Cms/FooterLogo/' . $cms->footer_logo) }}" alt="Footer Logo">
                            @else
                                <img src="{{ asset('frontend/assets/image/footer-logo-img.svg') }}" alt="Footer Logo">
                            @endif
                            <p>Green Energy is a long established fact that a reader will be distracted by the
                                readable content of a page when.</p>
                            <div class="footer-icon">
                                <a href="{{ isset($cms->facebook_link) ? $cms->facebook_link : '' }}"><img
                                        src="{{ asset('frontend/assets/image/icon/footer-facebook-icon.svg') }}"
                                        alt=""></a>
                                <a href="{{ isset($cms->twitter_link) ? $cms->twitter_link : '' }}"><img
                                        src="{{ asset('frontend/assets/image/icon/footer-twitter-icon.svg') }}"
                                        alt=""></a>
                                <a href="{{ isset($cms->linkedin_link) ? $cms->linkedin_link : '' }}"><img
                                        src="{{ asset('frontend/assets/image/icon/footer-linkedin-icon.svg') }}"
                                        alt=""></a>
                                <a href="{{ isset($cms->instagram_link) ? $cms->instagram_link : '' }}"><img
                                        src="{{ asset('frontend/assets/image/icon/footer-instagram-icon.svg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-item">
                            <div class="row">
                                <div class="col-md-4 g-0">
                                    <div class="footer-quick">
                                        <h5>Quick Links</h5>
                                        <ul>
                                            <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                            <li><a href="{{ route('frontend.who-we-are.about-the-company') }}"> Who We
                                                    Are</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="{{ route('frontend.news.index') }}">News </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 g-0">
                                    <div class="footer-quick">
                                        <h5>Services</h5>
                                        <ul>
                                            <li><a href="#">Hybrid Energy</a></li>
                                            <li><a href="#">Renewable Energy</a></li>
                                            <li><a href="#">Solar Maintenance​</a></li>
                                            <li><a href="#">Solar PV Systems</a></li>
                                            <li><a href="#">Solar Solutions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 g-0">
                                    <div class="footer-quick">
                                        <h5>Useful Links</h5>
                                        <ul>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Term & Conditions</a></li>
                                            <li><a href="#">Warranty​</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Damage Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copy-right">
                        <div class="copy-right-bg">
                            <p>Copyright © 2024 Solor. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <iframe src="https://www.youtube.com/embed/ZRX7R6sjIs0?si=9ObySwHQhEnpknXu" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- Counter Number Js -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }
        counter("count1", 0, 1000, 3000);
        counter("count2", 100, 1200, 2500);
        counter("count3", 0, 850, 3000);
        counter("count4", 0, 1100, 3000);
    });
</script>


<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
        },
        autoplay: {
            delay: 2000,
        },
    });
</script>


<!-- bootstrap-Js Link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<!-- Swiper Slider Js Link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


<!-- WOW Cdn Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
<script>
    new WOW().init();
</script>

<!-- Image Slider JS Link -->
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

<script>
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        width: "90vw",
        height: "90vh",
    });
</script>


</body>

</html>
