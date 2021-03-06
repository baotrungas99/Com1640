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
                                    <div class="g-grid">
                                    @foreach ($ideas as $key =>$idea)
                                        <div class="col-sm-12 g-grid-col">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="{{asset('public/frontend/assets/img/courses/1.jpg')}}" alt="img"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <a href="#">Drawing</a>
                                                        <span><i class="fa fa-clock-o"></i>
                                                            <?php
                                                                // $datesubmit = ($today - $idea->created_at);
                                                                // $dateupdate = (int) ($datesubmit/ 86400);
                                                                // print $dateupdate;
                                                            ?>

                                                        </span>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="#">{{$idea->idea_article}}</a></h4>
                                                    <p>{!! $idea->idea_sum !!}</p>
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="{{url('/detail-idea/'.$idea->idea_slug)}}">Details</a>
                                                        <span class="mu-course-price" href="#">{{$idea->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
                {!! $ideas->links() !!}
          </ul>
        </div>
      </div>
    </footer>
@endsection
