@extends('layout')
@section('content')
<section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="mu-page-breadcrumb-area">
                        <!-- click vo department nao no ra ten cua department do -->
                        <center><h2>Add new idea</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="row">
    <div class="col-md-12">
        <div id="respond">
                <form id="commentform" action="{{ url('/insert-idea')}}" method="post" enctype="multipart/form-data">
                    <p class="comment-notes">
                        Your email address will not be published. Required fields are marked <span class="required">*</span>
                    </p>
                    <p class="comment-form-author">
                        <label for="author">Name <span class="required">*</span></label>
                        <input type="text" required="required"  value="" name="idea_author">
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" required="required" aria-required="true" value="" name="idea_email">
                    </p>
                        <div class="form-group">
                            <label for="exampleInputPassword1">category Ideas</label>
                                <select name="cate_post_id" class="form-control input-sm m-bot15">
                                    @foreach($category as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_idea_name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Post idea as</label>
                                <select name="cate_post_id" class="form-control input-sm m-bot15">
                                        <option value="0">your name</option>
                                        <option value="1">Anonymous</option>
                                </select>
                        </div>
                    <p class="comment-form-comment">
                        <label for="comment">Idea Article</label>
                        <input type="text" required="required" aria-required="true" name="idea_article"id="slug"onkeyup="ChangeToSlug();">
                    </p>
                    <p class="comment-form-comment">
                        <label for="comment">Slug</label>
                        <input type="text" required="required"id="convert_slug" aria-required="true" name="idea_slug" >
                    </p>
                    <p class="comment-form-comment">
                        <label for="comment">Description</label>
                        <textarea class="ckeditor form-control" required="required" aria-required="true" rows="8" cols="45" name="idea_desc"></textarea>
                    </p>
                    <p>
                        Select image to upload:
                        <input type="file" name="idea_image" id="fileToUpload">
                    </p>
                    <p class="comment-form-email">
                        <label for="email">Confirm with us <span class="required">*</span></label>
                        <input type="radio" required="required" aria-required="true" value="0" name="yes" id="y"> Yes <br>
                        <input type="radio" required="required" aria-required="true" value="1" name="no" id="n"> No <br>

                    </p>
                    <p class="form-submit">
                        <input type="submit" value="Submit" class="mu-post-btn" name="submit">
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
