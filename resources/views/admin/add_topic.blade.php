@extends('login_layout')
@section('login_content')
<center>
<div class="position-center" style="width: 80%;">
                    <section class="panel">
                       <center> <header class="panel-heading">
                            <h2>Add Topic Ideas</h2>
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
                                <form role="form"action="{{url('/insert-topic')}}"method="post" >
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">topic Name</label>
                                    <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="topic_name"  id="slug" placeholder="Name"required >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="topic_slug" class="form-control" id="convert_slug" placeholder="Slug" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Due Date</label>
                                    <input type="date" name="due_date" class="form-control" id="due_date" placeholder="Due date" required>
                                </div>

                                <button type="submit" name="add_topic" class="btn btn-info">Add</button>
                            </form>
                            </div>

                        </div>
                    </section>
                        </div>
                        </center>
@endsection

