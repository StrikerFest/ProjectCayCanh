@extends('customer.layout.default')
@section('content')
<main class="main-content">
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="assets/images/product/large-size/1-1-570x633.jpg"
                                        class="single-img gallery-popup">
                                        <img class="img-full" src="http://127.0.0.1:8000/storage/images/{{$product->image}}"
                                            alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbs-arrow-holder">
                            <div class="swiper-container single-product-thumbs">
                                <div class="swiper-wrapper">
                                </div>
                                <!-- Add Arrows -->
                                <div class=" thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title">{{$product->name}}</h2>
                        <div class="price-box">
                            <span class="new-price">{{$product->export_price}}</span>
                        </div>
                        <div class="rating-box-wrap pb-4">
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="review-status">
                                <a href="javascript:void(0);"></a>
                            </div>
                        </div>
                        
                        <ul class="quantity-with-btn">
                            
                            <li class="add-to-cart">
                                <a class="btn btn-custom-size lg-size btn-pronia-primary" href="/add-to-cart/{{$product->id}}">Thêm Giỏ Hàng</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab"
                                aria-controls="information" aria-selected="false">
                                Thông tin
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="product-information-body">
                                {!!$product->description!!}
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="product-description-body">
                            {!!$product->description!!}
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-body">
                                <div class="blog-comment mt-0">
                                    <h4 class="heading">Comments (03)</h4>
                                    <div class="blog-comment-item">
                                        <div class="blog-comment-img">
                                            <img src="assets/images/blog/avatar/1-1-120x120.png" alt="User Image">
                                        </div>
                                        <div class="blog-comment-content">
                                            <div class="user-meta">
                                                <h2 class="user-name">Donald Chavez</h2>
                                                <span class="date">21 July 2021</span>
                                            </div>
                                            <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                elit, sed
                                                do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                minim
                                                veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                commodo
                                                consequat.
                                            </p>
                                            <a class="btn btn-custom-size comment-btn"
                                                href="javascript:void(0);">Reply</a>
                                        </div>
                                    </div>
                                    <div class="blog-comment-item relpy-item">
                                        <div class="blog-comment-img">
                                            <img src="assets/images/blog/avatar/1-2-120x120.png" alt="User Image">
                                        </div>
                                        <div class="blog-comment-content">
                                            <div class="user-meta">
                                                <h2 class="user-name">Marissa Swan</h2>
                                                <span class="date">21 July 2021</span>
                                            </div>
                                            <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                elit, sed do
                                                eiusmod tempr incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                minim veniam,
                                                quisnos exercitati ullamco laboris nisi ut aliquiex.
                                            </p>
                                            <a class="btn btn-custom-size comment-btn style-2"
                                                href="javascript:void(0);">Reply</a>
                                        </div>
                                    </div>
                                    <div class="blog-comment-item">
                                        <div class="blog-comment-img">
                                            <img src="assets/images/blog/avatar/1-3-120x120.png" alt="User Image">
                                        </div>
                                        <div class="blog-comment-content">
                                            <div class="user-meta">
                                                <h2 class="user-name">Donald Chavez</h2>
                                                <span class="date">21 July 2021</span>
                                            </div>
                                            <p class="user-comment">Lorem ipsum dolor sit amet, consectetur adipisi
                                                elit, sed
                                                do eiusmod tempor incidid ut labore etl dolore magna aliqua. Ut enim ad
                                                minim
                                                veniam, quis nostrud exercitati ullamco laboris nisi ut aliquiex ea
                                                commodo
                                                consequat.
                                            </p>
                                            <a class="btn btn-custom-size comment-btn"
                                                href="javascript:void(0);">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-area">
                                    <h2 class="heading">Leave a comment</h2>
                                    <form class="feedback-form" action="#">
                                        <div class="group-input">
                                            <div class="form-field me-md-30 mb-30 mb-md-0">
                                                <input type="text" name="name" placeholder="Your Name*"
                                                    class="input-field">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" name="email" placeholder="Your Email*"
                                                    class="input-field">
                                            </div>
                                        </div>
                                        <div class="form-field mt-30">
                                            <input type="text" name="subject" placeholder="Subject (Optinal)"
                                                class="input-field">
                                        </div>
                                        <div class="form-field mt-30">
                                            <textarea name="message" placeholder="Message"
                                                class="textarea-field"></textarea>
                                        </div>
                                        <div class="button-wrap pt-5">
                                            <button type="submit" value="submit"
                                                class="btn btn-custom-size xl-size btn-pronia-primary"
                                                name="submit">Post
                                                Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Product Area -->
    <div class="product-area section-space-y-axis-90">
        <div class="container">
            <div class="row">
                <div class="section-title-wrap without-tab">
                    <h2 class="section-title">Sản Phẩm Liên quan</h2>
                </div>
                <div class="col-lg-12">
                    <div class="swiper-container product-slider">
                        <div class="swiper-wrapper">
                            @foreach($productByCategory as $item)
                            <div class="swiper-slide product-item">
                                <div class="product-img">
                                    <a href="/single-product/{{$item->id}}">
                                        <img class="primary-img" src="http://127.0.0.1:8000/storage/images/{{$item->image}}"
                                            alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product-variable.html">{{$item->name}}</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">{{$item -> export_price}}</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->

</main>

@endsection
