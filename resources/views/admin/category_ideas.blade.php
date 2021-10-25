@extends('login_layout')
@section('login_content')
<center>
<div class="position-center" style="width: 80%;">
                    <section class="panel">
                       <center> <header class="panel-heading">
                            <h2>Add Category Ideas</h2>
                        </header></center>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message,'</span>';
                                Session::put('message',null);
                            }
                        ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form"action="{{url('/insert-category')}}"method="post" >
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="category_name"  id="slug" placeholder="Name"required >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="slug_category" class="form-control" id="convert_slug" placeholder="Slug" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize:none" rows="8" type="password" name = "category_desc" class="ckeditor form-control" id="2" placeholder="Category details" required>
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Topic Ideas</label>
                                        <select name="topic_id" class="form-control input-sm m-bot15">
                                            @foreach($topic as $key => $top)
                                                <option value="{{$top->topic_id}}">{{$top->topic_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <button type="submit" name="add_category" class="btn btn-info">Add</button>
                            </form>
                            </div>

                        </div>
                    </section>
                        </div>
                        </center>
@endsection

