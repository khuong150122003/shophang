@extends('layout')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(frontend/images/img_bg_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <span class="price">$800</span>
                               <h2>Alato Cabinet</h2>
                               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(frontend/images/img_bg_2.jpg);">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <span class="price">$530</span>
                               <h2>The Haluz Rocking Chair</h2>
                               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(frontend/images/img_bg_3.jpg);">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <span class="price">$750</span>
                               <h2>Alato Cabinet</h2>
                               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(frontend/images/img_bg_4.jpg);">
               <div class="container">
                   <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <div class="desc">
                               <span class="price">$540</span>
                               <h2>The WW Chair</h2>
                               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                               <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>


<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Cool Stuff</span>
                <h2>Products.</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>

        <div class="row">
            @foreach ($all_product as $key => $product)
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url({{URL::to('public/upload/product/'.$product->product_image)}});">
                        <div class="inner">
                            <p>
                                <a href="{{URL::to('/detail_product/'.$product->product_id)}}" class="icon"><i class="icon-shopping-cart"></i></a>
                                <a href="{{URL::to('/detail_product/'.$product->product_id)}}" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="single.html">{{$product->product_name}}</a></h3>
                        <span class="price">{{number_format($product->product_price).'$'}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-credit-card"></i>
                    </span>
                    <h3>Credit Card</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-wallet"></i>
                    </span>
                    <h3>Save Money</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-paper-plane"></i>
                    </span>
                    <h3>Free Delivery</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
