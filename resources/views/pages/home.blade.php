@extends('layout')
@section('content')
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <!-- click vo department nao no ra ten cua department do -->
                        <h2>(Name of department)</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">(Name of department)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->
                                <div class="mu-course-container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">

                                            <div class="mu-latest-course-single">

                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <a href="#">Drawing</a>
                                                        <span><i class="fa fa-clock-o"></i>90Days</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="#">Details</a>
                                                        <span class="mu-course-price" href="#">$165.00</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end course content container -->
                                <!-- start course pagination -->
                                <div class="mu-pagination">
                                    <nav>
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span class="fa fa-angle-left"></span> Prev
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                                            </li>

                                        </ul>

                                    </nav>

                                </div>
                                <!-- end course pagination -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Departments</h3>
                                        <ul class="mu-sidebar-catg">
                                            <li><a href="#">Information Technology</a></li>
                                            <li><a href="">Business Management</a></li>
                                            <li><a href="">Graphic Design</a></li>
                                            <li><a href="">Event Management</a></li>
                                        </ul>
                                    </div>
                                    <div class="mu-single-sidebar">
                                        <h3>Add the idea</h3>
                                        <ul class="mu-sidebar-catg">
                                            <li><a href="submit.html">Submit new idea here</a></li>
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Popular idea</h3>
                                        <div class="mu-sidebar-popular-courses">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Medical Science</a></h4>
                                                    <span class="popular-course-price">$200.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Web Design</a></h4>
                                                    <span class="popular-course-price">$250.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Health & Sports</a></h4>
                                                    <span class="popular-course-price">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->


                                </aside>
                                <!-- / end sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
