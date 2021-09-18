@extends('layout')
@section('content')
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="mu-page-breadcrumb-area">
                        <!-- click vo department nao no ra ten cua department do -->
                        <center><h2>Ideas From All Departments</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
