@extends('layout')
@section('content')
<!-- Page breadcrumb -->
@foreach($category_name as $key =>$name)
<section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="mu-page-breadcrumb-area">
                        <!-- click vo department nao no ra ten cua department do -->
                        <center><h2>{{$name->category_idea_name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
<div class="mu-course-container">
                                    <div class="g-grid">
                                    @foreach ($category_by_slug as $key =>$cate_by_slug)
                                        <div class="col-sm-12 g-grid-col">
                                            <div class="mu-latest-course-single">
                                                <figure class="mu-latest-course-img">
                                                    <a href="#"><img src="{{asset('public/frontend/assets/img/courses/1.jpg')}}" alt="img"></a>
                                                    <figcaption class="mu-latest-course-imgcaption">
                                                        <a href="#">Drawing</a>
                                                        <span><i class="fa fa-clock-o"></i>90Days</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-latest-course-single-content">
                                                    <h4><a href="#">{{$cate_by_slug->idea_article}}</a></h4>
                                                    <p>{!! $cate_by_slug->idea_desc !!}</p>
                                                    <div class="mu-latest-course-single-contbottom">
                                                        <a class="mu-course-details" href="#">Details</a>
                                                        <span class="mu-course-price" href="#">{{$cate_by_slug->created_at}}</span>
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
                {!! $category_by_slug->links() !!}
          </ul>
        </div>
      </div>
    </footer>
@endsection
