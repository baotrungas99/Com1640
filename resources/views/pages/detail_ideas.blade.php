@extends('layout')
@section('content')
@foreach($details_idea as $key => $value)
<div class="mu-course-container mu-blog-single">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="mu-blog-single-item">
                                                <figure class="mu-blog-single-img">
                                                    <a href="#"><img alt="img" src="{{asset('public/frontend/assets/img/blog/blog-3.jpg')}}"></a>
                                                    <figcaption class="mu-blog-caption">
                                                        <h3><a href="#">{{$value->idea_article}}</a></h3>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-blog-meta">
                                                    @if($value->post_as == 0)
                                                    <a href="#">{{$value->idea_author}}</a>
                                                    @else
                                                    <a href="#">Anonymous</a>
                                                    @endif
                                                    <a href="#">{{$value->created_at}}</a>
                                                    <span><i class="fa fa-comments-o"></i>
                                                    {{$count_commnet}}
                                                </span>
                                                </div>
                                                <div class="mu-blog-description">
                                                    <p>{!!$value->idea_desc!!}</p>
                                                </div>
                                                <!-- start blog post tags -->
                                                <div class="mu-blog-tags">
                                                    <ul class="mu-news-single-tagnav">
                                                        <li>Documentation :</li>
                                                        <li><a href="#">{{$value->idea_document}}</a></li>
                                                        <li>porpulate :</li>
                                                        <li><a href="#">{{$count_thumb_up - $count_thumb_down}}</a></li>
                                                    </ul>
                                                </div>
                                                <!-- End blog post tags -->
                                                <!-- start blog social share -->

                                                @foreach ($thumb as $th)
                                                @if($th)
                                                    @if(Auth::user()->id == $th->user_id)
                                                        @if($th->thumb_status==0)
                                                            You had already liked this idea
                                                        @else
                                                            You had already disliked this idea
                                                        @endif
                                                    @endif
                                                @else
                                                <div class="mu-blog-social">
                                                    <ul class="mu-news-social-nav">
                                                  <li> <form action="{{('/thumb-idea')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                                                            <input type="hidden" name="idea_slug" value="{{$value->idea_slug}}"/>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Like</label>
                                                            <select name="thumb" class="form-control input-sm m-bot15">
                                                                    <option class="fa fa-thumbs-up"  value="0"> Like</option>
                                                                    <option class="fa fa-thumbs-down" value="1"> Dislike</option>
                                                            </select>
                                                    </div>
                                                    <input type="submit" name="submit_thumb" class="btn btn-primary" >
                                                    </form></li>
                                                    </ul>
                                                </div>
                                                @endif
                                                @endforeach
                                                <!--  -->
                                                <!-- End blog social share -->
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- end course content container -->

                                <!-- start related course item -->

                                <!-- end start related course item -->
                                <!-- start blog comment -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mu-comments-area">

                                            <h3>5 Comments</h3>

                                            <div class="comments">
                                            @foreach($comment as $key_com => $com)
                                                <ul class="commentlist">
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img alt="img" src="{{asset('public/frontend/assets/img/testimonial-1.png')}}" class="media-object news-img">
                                                            </div>
                                                            <div class="media-body">
                                                                @if($com->comment_by == 0)
                                                                <h4 class="author-name">{{$com->comment_user_name}}</h4>
                                                                @else
                                                                <h4 class="author-name">Anonymous</h4>
                                                                @endif
                                                                <span class="comments-date"> Posted on : {{$com->created_comment_at}}</span>
                                                                <p>{!!$com->comment_content!!}</p>
                                                               </span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endforeach

                                                <!-- comments pagination -->
                                                <nav>
                                                    <ul class="pagination comments-pagination">
                                                       {!! $comment->links() !!}
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end blog comment -->
                                <!-- start respond form -->
                                @if(Auth::user())
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="respond">
                                            <h3 class="reply-title">Leave a Comment</h3>

                                            <form id="commentform" action="{{url('/add-comment')}}" method="post">
                                                @csrf
                                                <p class="comment-form-author">

                                                    <input type="hidden" required="required" size="30" value="{{Auth::user()->name}}" name="user_name">
                                                </p>
                                                <p class="comment-form-email">

                                                    <input type="hidden" required="required" aria-required="true" value="{{Auth::user()->email}}" name="user_email">
                                                </p>
                                                <input type="hidden" required="required" aria-required="true" value="{{$value->idea_id}}" name="idea_id">

                                                <p class="comment-form-comment">
                                                    <label for="comment">Comment</label>
                                                    <textarea required="required" aria-required="true" rows="8" cols="45" name="comment_content"></textarea>
                                                </p>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Comment as</label>
                                                        <select name="post_as" class="form-control input-sm m-bot15">
                                                                <option value="0">{{Auth::user()->name}}</option>
                                                                <option value="1">Anonymous</option>
                                                        </select>
                                                </div>
                                                <p class="form-submit">
                                                    <input type="submit" value="Post Comment" class="mu-post-btn" name="post_comment">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
@endforeach
@endsection
