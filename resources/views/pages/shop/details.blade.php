@extends('app.app')
@section('main-body')
<div class="page-banner" style="margin-top: 150.639px;">
    <div class="page-banner__wrapper" style="margin-top: 150.639px;">
        <div class="container">

            <!-- Page Breadcrumb Start -->
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-default.html">Our Shop</a></li>
                    <li class="breadcrumb-item active">Business Administration</li>
                </ul>
            </div>
            <!-- Page Breadcrumb End -->

        </div>
    </div>
</div>
<div class="shop-section section-padding-01">
    <div class="container custom-container">

        <!-- Shop Single Product Start -->
        <div class="shop-single-product">
            <div class="row gy-6">
                <div class="col-md-6">

                    <!-- Shop Single Product Start -->
                    <div class="shop-single-product__images">

                        <div class="shop-single-product__image-main">
                            <div class="shop-single-product__badge">
                                <span class="best-seller">Best Seller</span>
                            </div>

                            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-91fb6b910528a32fb" aria-live="polite"
                                  style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide product-image-main swiper-slide-active" role="group"
                                      aria-label="1 / 4" style="width: 570px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-3.png" alt="Product" width="532"
                                          height="615">
                                    </div>
                                    <div class="swiper-slide product-image-main swiper-slide-next" role="group"
                                      aria-label="2 / 4" style="width: 570px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-4.png" alt="Product" width="532"
                                          height="615">
                                    </div>
                                    <div class="swiper-slide product-image-main" role="group" aria-label="3 / 4"
                                      style="width: 570px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-17.png" alt="Product" width="532"
                                          height="615">
                                    </div>
                                    <div class="swiper-slide product-image-main" role="group" aria-label="4 / 4"
                                      style="width: 570px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-18.png" alt="Product" width="532"
                                          height="615">
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>

                        <div class="shop-single-product__image-thumbs">
                            <div
                              class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-97bce87f98a56c49" aria-live="polite"
                                  style="transform: translate3d(0px, 0px, 0px);">
                                    <div
                                      class="swiper-slide product-image-thumb swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                      role="group" aria-label="1 / 4" style="width: 135px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-3.png" alt="Product" width="126"
                                          height="145">
                                    </div>
                                    <div class="swiper-slide product-image-thumb swiper-slide-visible swiper-slide-next"
                                      role="group" aria-label="2 / 4" style="width: 135px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-4.png" alt="Product" width="126"
                                          height="145">
                                    </div>
                                    <div class="swiper-slide product-image-thumb swiper-slide-visible" role="group"
                                      aria-label="3 / 4" style="width: 135px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-17.png" alt="Product" width="126"
                                          height="145">
                                    </div>
                                    <div class="swiper-slide product-image-thumb swiper-slide-visible" role="group"
                                      aria-label="4 / 4" style="width: 135px; margin-right: 10px;">
                                        <img src="{{ asset('') }}assets/images/product/product-18.png" alt="Product" width="126"
                                          height="145">
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>

                    </div>
                    <!-- Shop Single Product End -->

                </div>
                <div class="col-md-6">

                    <!-- Shop Single Product Content Start -->
                    <div class="shop-single-product__content">
                        <h1 class="shop-single-product__title">Business Administration</h1>
                        <div class="shop-single-product__meta-review-rating">
                            <div class="inner">
                                <div class="shop-single-product__attribute">
                                    <span class="label">Author:</span>
                                    <span class="value">Alexander Morgan</span>
                                </div>
                                <div class="shop-single-product__rating">
                                    <div class="shop-single-product__rating-average">
                                        <span class="average">5.0</span>
                                        <span class="total">/5</span>
                                    </div>
                                    <div class="rating-star">
                                        <div class="rating-label" style="width: 80%;"></div>
                                    </div>
                                    <a href="#" class="shop-single-product__review-link">(<span class="count">1</span>
                                        review)</a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-single-product__price">
                            <span class="sale-price">$26.<small class="separator">00</small> - $36.<small
                                  class="separator">00</small></span>
                        </div>
                        <div class="shop-single-product__description">
                            <p>Lorem ipsum dolor sit amet, consecte tur cing elit. Suspe ndisse lor sit amet, consecte
                                tur cing esuscipit tur cing elitus Suspe ndisse suscipit tur cing elitus lor sit amet,
                                consecte tur cing ipsum…</p>
                        </div>

                        <form action="#">
                            <div class="shop-single-product__variations">

                                <table class="shop-single-product__variation-table table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Episode</span></td>
                                            <td class="value">
                                                <div class="shop-single-product__swatch">
                                                    <span class="swatch-item active">Episode 1</span>
                                                    <span class="swatch-item">Episode 2</span>
                                                    <span class="swatch-item">Episode 3</span>
                                                    <span class="swatch-item">Episode 4</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"></td>
                                            <td class="value">
                                                <a href="#" class="shop-single-product__reset-variations">Clear</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="shop-single-product__variations-price-availability">
                                    <div class="shop-single-product__variations-price">
                                        <span class="sale-price">$26.<small class="separator">00</small></span>
                                    </div>
                                    <div class="shop-single-product__variations-availability">
                                        <p class="stock">78 in stock</p>
                                    </div>
                                </div>

                                <div class="shop-single-product__quantity-meta">

                                    <div class="shop-single-product__quantity">
                                        <label>Quantity</label>
                                        <div class="product-quantity">
                                            <button type="button" class="sub"></button>
                                            <input type="text" value="1">
                                            <button type="button" class="add"></button>
                                        </div>
                                    </div>

                                    <div class="shop-single-product__meta">
                                        <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                        <a class="shop-single-product__meta-action" data-bs-tooltip="tooltip"
                                          data-bs-placement="top" title="" href="#"
                                          data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i
                                              class="far fa-heart"></i></a>
                                        <a class="shop-single-product__meta-action" data-bs-tooltip="tooltip"
                                          data-bs-placement="top" title="" href="#" data-bs-original-title="Compare"
                                          aria-label="Compare"><i class="fas fa-signal"></i></a>
                                    </div>

                                </div>

                            </div>
                        </form>

                        <div class="shop-single-product__meta-product">

                            <div class="shop-single-product__meta-item">
                                <div class="label">SKU:</div>
                                <div class="value">N/A</div>
                            </div>
                            <div class="shop-single-product__meta-item">
                                <div class="label">Category:</div>
                                <div class="value"><a href="#">Business</a></div>
                            </div>
                            <div class="shop-single-product__meta-item">
                                <div class="label">Tags:</div>
                                <div class="value">
                                    <a href="#">beginner </a> ,
                                    <a href="#">business </a> ,
                                    <a href="#">expert</a>
                                </div>
                            </div>

                        </div>

                        <div class="shop-single-product__social">
                            <a href="#" class="twitter" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                              data-bs-original-title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="facebook" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                              data-bs-original-title="Facebook" aria-label="Facebook"><i
                                  class="fab fa-facebook-f"></i></a>
                            <a href="#" class="linkedin" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                              data-bs-original-title="Linkedin" aria-label="Linkedin"><i
                                  class="fab fa-linkedin"></i></a>
                            <a href="#" class="tumblr" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                              data-bs-original-title="Tumblr" aria-label="Tumblr"><i
                                  class="fab fa-tumblr-square"></i></a>
                            <a href="#" class="email" data-bs-tooltip="tooltip" data-bs-placement="top" title=""
                              data-bs-original-title="Email" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>

                    </div>
                    <!-- Shop Single Product Content End -->

                </div>
            </div>
        </div>
        <!-- Shop Single Product End -->

        <!-- Shop Product Tabs Start -->
        <div class="shop-product-tabs">

            <ul class="nav">
                <li><button class="" data-bs-toggle="tab" data-bs-target="#description">Description </button></li>
                <li><button data-bs-toggle="tab" data-bs-target="#information" class="active">Additional
                        information</button></li>
                <li><button data-bs-toggle="tab" data-bs-target="#reviews">Reviews (1)</button></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="description">
                    <!-- Shop Product Tabs Item Start -->
                    <div class="shop-product-tabs__item mt-6">
                        <p>Senectus et netus et malesuada. Nunc pulvinar sapien et ligula ullamcorper malesuada proin.
                            Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt eget. Leo a diam
                            sollicitudin tempor id. A lacus vestibulum sed arcu non odio euismod lacinia. In tellus
                            integer feugiat scelerisque. Feugiat in fermentum posuere urna nec tincidunt praesent.
                            Porttitor rhoncus dolor purus non enim praesent elementum facilisis. Nisi scelerisque eu
                            ultrices vitae auctor eu augue ut lectus. </p>
                    </div>
                    <!-- Shop Product Tabs Item End -->
                </div>
                <div class="tab-pane fade active show" id="information">
                    <!-- Shop Product Tabs Item Start -->
                    <div class="shop-product-tabs__item mt-6">
                        <table class="shop-product-tabs__table">
                            <tbody>
                                <tr>
                                    <th class="label">Episode</th>
                                    <td class="value">
                                        <p>Episode 1, Episode 2, Episode 3, Episode 4</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="label">Author</th>
                                    <td class="value">
                                        <p>Alexander Morgan</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="label">Language</th>
                                    <td class="value">
                                        <p>English</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Shop Product Tabs Item End -->
                </div>
                <div class="tab-pane fade" id="reviews">
                    <!-- Shop Product Tabs Item Start -->
                    <div class="shop-product-tabs__item mt-6">
                        <ul class="comment-list">
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment-item">
                                    <div class="comment-item__author">
                                        <img src="{{ asset('') }}assets/images/avatar/avatar-02.jpg" alt="Avatar" width="70"
                                          height="70">
                                    </div>
                                    <div class="comment-item__content">
                                        <div class="comment-item__meta">
                                            <div class="comment-item__rating">
                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                            <h6 class="comment-item__name">Owen Christ</h6>
                                        </div>
                                        <div class="comment-item__description">
                                            <p>good book</p>
                                        </div>
                                        <div class="comment-item__footer">
                                            <span class="comment-item__datetime">June 16, 2020 at 2:00 am</span>
                                            <a href="#" class="comment-item__reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment-item">
                                    <div class="comment-item__author">
                                        <img src="{{ asset('') }}assets/images/avatar/avatar-03.jpg" alt="Avatar" width="70"
                                          height="70">
                                    </div>
                                    <div class="comment-item__content">
                                        <div class="comment-item__meta">
                                            <div class="comment-item__rating">
                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                            <h6 class="comment-item__name">Owen Christ</h6>
                                        </div>
                                        <div class="comment-item__description">
                                            <p>good book</p>
                                        </div>
                                        <div class="comment-item__footer">
                                            <span class="comment-item__datetime">June 16, 2020 at 2:00 am</span>
                                            <a href="#" class="comment-item__reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment-item">
                                    <div class="comment-item__author">
                                        <img src="{{ asset('') }}assets/images/avatar/avatar-04.jpg" alt="Avatar" width="70"
                                          height="70">
                                    </div>
                                    <div class="comment-item__content">
                                        <div class="comment-item__meta">
                                            <div class="comment-item__rating">
                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                            <h6 class="comment-item__name">Owen Christ</h6>
                                        </div>
                                        <div class="comment-item__description">
                                            <p>good book</p>
                                        </div>
                                        <div class="comment-item__footer">
                                            <span class="comment-item__datetime">June 16, 2020 at 2:00 am</span>
                                            <a href="#" class="comment-item__reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>
                        </ul>

                        <!-- Comment Form Start -->
                        <div class="comment-form">
                            <form action="#">
                                <div class="comment-form__notes">
                                    <h4 class="comment-form__title">Add a review</h4>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <div class="comment-form__rating">
                                    <label class="label">Your rating: *</label>
                                    <ul id="rating" class="rating">
                                        <li class="star" title="Poor" data-value="1"><i class="fas fa-star"></i></li>
                                        <li class="star" title="Poor" data-value="2"><i class="fas fa-star"></i></li>
                                        <li class="star" title="Poor" data-value="3"><i class="fas fa-star"></i></li>
                                        <li class="star" title="Poor" data-value="4"><i class="fas fa-star"></i></li>
                                        <li class="star" title="Poor" data-value="5"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="comment-form__input">
                                            <input type="text" class="form-control" placeholder="Your Name *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="comment-form__input">
                                            <input type="email" class="form-control" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comment-form__input">
                                            <textarea class="form-control" placeholder="Your Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comment-form__input form-check">
                                            <input type="checkbox" id="save">
                                            <label for="save">Save my name, email, and website in this browser for the
                                                next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="comment-form__input">
                                            <button class="btn btn-primary btn-hover-secondary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Form End -->

                    </div>
                    <!-- Shop Product Tabs Item End -->
                </div>
            </div>

        </div>
        <!-- Shop Product Tabs End -->

    </div>
</div>
@endsection
