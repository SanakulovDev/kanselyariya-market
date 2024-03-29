<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" type="image/icon" href="/images/favicon.ico"/>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- Start Header -->
    <header id="mu-header" class="" role="banner">
        <div class="container">
            <nav class="navbar navbar-default mu-navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Text Logo -->
                    <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i>Kanselyariya</a>

                    <!-- Image Logo -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li class="active"><a href="#">HOME</a></li>
                        <li class=""><a href="#mu-book-overview">OVERVIEW</a></li>
                        <li class=""><a href="#mu-author">AUTHOR</a></li>
                        <li class=""><a href="#mu-pricing">PRICE</a></li>
                        <li class=""><a href="#mu-testimonials">TESTIMONIALS</a></li>
                        <li class=""><a href="#mu-contact">CONTACT</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>
<!-- End Header -->
<!-- Start Featured Slider -->

<section id="mu-hero">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6 col-sm-push-6">
                <div class="mu-hero-right">
                    <img src="/images/dashboard.png" alt="Ebook img">
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-sm-pull-6">
                <div class="mu-hero-left">
                    <h1>Perfect Landing Page Template to Present Your eBook</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe, recusandae quidem nulla! Eveniet explicabo perferendis aut, ab quos omnis labore laboriosam quisquam hic deserunt ipsum maxime aspernatur velit impedit.</p>
                    <a href="#" class="mu-primary-btn">Download Now!</a>
                    <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span>
                </div>
            </div>  

        </div>
    </div>
</section>

<!-- Start Featured Slider -->
<main role="main">

    <!-- Start Counter -->
    <section id="mu-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-counter-area">

                        <div class="mu-counter-block">
                            <div class="row">

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="650">0</div>
                                        <h5 class="mu-counter-name">Total Pages</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="422">0</div>
                                        <h5 class="mu-counter-name">Chapters</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="1055">0</div>
                                        <h5 class="mu-counter-name">Active Readers</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                                <!-- Start Single Counter -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-single-counter">
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                        <div class="counter-value" data-count="03">0</div>
                                        <h5 class="mu-counter-name">Got Awards</h5>
                                    </div>
                                </div>
                                <!-- / Single Counter -->

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    <!-- Start Book Overview -->
    <section id="mu-book-overview">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-book-overview-area">

                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Book Overview</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Book Overview Content -->
                        <div class="mu-book-overview-content">
                            <div class="row">

                                <!-- Book Overview Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-area-chart" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter One</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-cubes" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Two</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-modx" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Three</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-files-o" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Four</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- Book Overview Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Five</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-language" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Six</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-gg" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Seven</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                                <!-- About Us Single Content -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="mu-book-overview-single">
                                        <span class="mu-book-overview-icon-box">
                                            <i class="fa fa-wpforms" aria-hidden="true"></i>
                                        </span>
                                        <h4>Chapter Eight</h4>
                                        <p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis inkeras.</p>
                                    </div>
                                </div>
                                <!-- / Book Overview Single Content -->

                            </div>
                        </div>
                        <!-- End Book Overview Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Book Overview -->



    <!-- Start Video Review -->
    <section id="mu-video-review">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-video-review-area">

                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Check Out Our Video Review</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Video Review Content -->
                        <div class="mu-video-review-content">
                            <iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <!-- End Video Review Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Review -->

    <!-- Start Author -->
    <section id="mu-author">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-author-area">

                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">About The Author</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <!-- Start Author Content -->
                        <div class="mu-author-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-author-image">
                                        <img src="/images/family.png" alt="Author Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-author-info">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo suscipit facilis ipsum ullam reiciendis odio error iste neque ratione libero rem accusamus voluptatibus, nihil unde maiores sunt nisi. Assumenda, consectetur.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, dolorem error neque! Dolores similique ut iusto odit esse ipsam, nesciunt pariatur animi minima maiores mollitia cupiditate ad ipsum deleniti perspiciatis!</p>
                                        <img class="mu-author-sign" src="/images/author-signature.png" alt="Author Signature">

                                        <div class="mu-author-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Author Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Author -->

    <!-- Start Pricing -->
    <section id="mu-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-pricing-area">

                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">Our Pricing Plans</h2>
                            <span class="mu-header-dot"></span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>

                        <!-- Start Pricing Content -->
                        <div class="mu-pricing-content">
                            <div class="row">

                                <!-- Pricing Single Content -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="mu-pricing-single">

                                        <div class="mu-pricing-single-head">
                                            <h4>STANDARD PLAN</h4>
                                            <p class="mu-price-tag">
                                                <span>$</span> 15
                                            </p>
                                        </div>

                                        <ul class="mu-price-feature">
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                        </ul>

                                        <div class="mu-pricing-single-footer">
                                            <a href="#" class="mu-order-btn">Order Now!</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- / Pricing Single Content -->

                                <!-- Pricing Single Content -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="mu-pricing-single mu-popular-price-tag">


                                        <div class="mu-pricing-single-head">
                                            <h4>PROFESSIONAL PLAN</h4>
                                            <p class="mu-price-tag">
                                                <span>$</span> 25
                                            </p>
                                        </div>

                                        <ul class="mu-price-feature">
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                        </ul>

                                        <div class="mu-pricing-single-footer">
                                            <a href="#" class="mu-order-btn">Order Now!</a>
                                        </div>


                                    </div>
                                </div>
                                <!-- / Pricing Single Content -->

                                <!-- Pricing Single Content -->
                                <div class="col-sm-6 col-md-4">
                                    <div class="mu-pricing-single">


                                        <div class="mu-pricing-single-head">
                                            <h4>EXCLUSIVE PLAN</h4>
                                            <p class="mu-price-tag">
                                                <span>$</span> 45
                                            </p>
                                        </div>

                                        <ul class="mu-price-feature">
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                            <li> Lorem ipsum dolor sit amet. </li>
                                        </ul>

                                        <div class="mu-pricing-single-footer">
                                            <a href="#" class="mu-order-btn">Order Now!</a>
                                        </div>


                                    </div>
                                </div>
                                <!-- / Pricing Single Content -->


                            </div>
                        </div>
                        <!-- End Pricing Content -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- Start Testimonials -->
    <section id="mu-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonials-area">
                        <div class="mu-heading-area">
                            <h2 class="mu-heading-title">What Our Readers Says</h2>
                            <span class="mu-header-dot"></span>
                        </div>

                        <div class="mu-testimonials-block">
                            <ul class="mu-testimonial-slide">

                                <li>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                    <img class="mu-rt-img" src="/images/reader-1.jpg" alt="img">
                                    <h5 class="mu-rt-name"> - Alice Boga</h5>
                                    <span class="mu-rt-title">CEO, Apple Inc.</span>
                                </li>

                                <li>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                    <img class="mu-rt-img" src="/images/reader-2.jpg" alt="img">
                                    <h5 class="mu-rt-name"> - Jhon Doe</h5>
                                    <span class="mu-rt-title">Director, Google Inc.</span>
                                </li>

                                <li>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
                                    <img class="mu-rt-img" src="/images/reader-3.jpg" alt="img">
                                    <h5 class="mu-rt-name"> - Jessica Doe</h5>
                                    <span class="mu-rt-title">Web Developer</span>
                                </li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->

    <!-- Start Google Map -->
    <section id="mu-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589888.4396405783!2d-82.41588603632052!3d32.866951223053896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f9f727a4ed30eb%3A0xf2139b0c5c7ae1ec!2sDooley+Branch+Rd%2C+Millen%2C+GA+30442%2C+USA!5e0!3m2!1sen!2sbd!4v1497376364225" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End Google Map -->
</main>

<?= $content?>

<!-- Start footer -->
<footer id="mu-footer" role="contentinfo">
    <div class="container">
        <div class="mu-footer-area">
            <div class="mu-social-media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
        </div>
    </div>
</footer>
<!-- End footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
