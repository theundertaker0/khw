@extends('layouts.public')

@section('content')
<!-- banner -->
@include('public.partials.banner')
<!-- //banner -->
<div class="clearfix"></div>

<!-- about -->
@include('public.partials.about')
<!-- //about -->

<!-- specials -->
@include('public.partials.specials')
<!-- //specials -->

<!-- two grids -->
{{-- <section class="offer pt-lg-3">
    <div class="row no-gutters">
        <div class="col-md-6 p-0">
            <div class="blog-sec-w3">
                <div class="text-blog-w3 text-center p-2">
                    <h4 class="text-wh mb-3"><a href="menu.html">Best Fast Food Collection</a></h4>
                    <p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
                        ut perspiciatis
                        unde omnis iste natus error.</p>
                    <a href="menu.html" class="button-w3ls active mt-5">Order Now
                        <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="blog-sec-w3 blog-sec-w3-2">
                <div class="text-blog-w3 text-center p-2">
                    <h4 class="text-wh mb-3"><a href="menu.html">Organic Best & Fresh Food</a></h4>
                    <p class="text-li">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Sed
                        ut perspiciatis
                        unde omnis iste natus error.</p>
                    <a href="menu.html" class="button-w3ls active mt-5">Order Now
                        <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- //two grids -->

<!-- services -->
@include('public.partials.services')
<!-- //services -->
<!--Solo para separación de las secciones-->
<div class="py-5"></div>
<!-- blog -->
{{-- <section class="blog_w3ls py-5" id="blog">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <p class="w3ls-title-sub">Posts</p>
            <h3 class="w3ls-title mb-3">Our Latest <span>Blog</span></h3>
            <p class="titile-para-text mx-auto">Inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.Nemo
                enim totam rem aperiam.</p>
        </div>
        <div class="row">
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href="single.html">
                            <img src="images/blog1.png" class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src="images/te1.jpg" alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2"><a href="single.html">Sed ut Riciatis</a></h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>
                                Magna Kictum - Nov 12</span>
                        </div>
                        <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                        <a href="single.html" class="button-w3ls mt-4">Read More
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href="single.html">
                            <img src="images/blog2.png" class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src="images/te2.jpg" alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2"><a href="single.html">Unde omnis iste</a></h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>
                                Auris Jlan - Nov 15</span>
                        </div>
                        <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                        <a href="single.html" class="button-w3ls active mt-4">Read More
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="card border-0">
                    <div class="card-header p-0">
                        <a href="single.html">
                            <img src="images/blog3.png" class="card-img-bottom img-fluid" alt="image">
                        </a>
                        <img src="images/te3.jpg" alt="" class="img-blog rounded-circle img-fluid">
                    </div>
                    <div class="card-body text-center pt-5 mt-2">
                        <h5 class="blog-title card-title mb-2"><a href="single.html">Natus error sit</a></h5>
                        <div class="blog_w3icon border-top border-bottom py-1 mb-3">
                            <span>
                                Dictum Orta - Nov 20</span>
                        </div>
                        <p>Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                        <a href="single.html" class="button-w3ls mt-4">Read More
                            <span class="fa fa-caret-right ml-1" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
        </div>
    </div>
</section> --}}
<!-- //blog -->

<!-- slides images -->
@include('public.partials.gallery')
<!-- //slides images -->

<!--Solo para separación de las secciones-->
<div class="py-5"></div>

<!-- newsletter -->
{{-- <section class="subscribe-main py-5">
    <div class="container py-xl-5 py-3">
        <div class="row pb-lg-4 pt-lg-5">
            <div class="col-lg-6 col-md-9 text-center">
                <h3 class="w3ls-title mb-2">Subscribe to Newsletter</h3>
                <p class="mb-xl-5 mb-4">Free Delivery on your first order!</p>
                <form action="#" method="post" class="d-flex newsletter-info">
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-3">

            </div>
        </div>
        <img src="images/sub.png" alt="" class="img-fluid sub-img">
    </div>
</section> --}}
<!-- //newsletter -->

@endsection
