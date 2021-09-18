@extends('login_layout')
@section('login_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     <center> <h2> Category ideas list</h2>
    </div>

    <div class="table-responsive">

                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message,'</span>';
                                Session::put('message',null);
                            }
                        ?>

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Name</th>
            <th>slug</th>
            <th>Description</th>


          </tr>
        </thead>
        <tbody>
            @foreach($category as $key => $val)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$val->category_idea_name}}</td>
            <td>{{$val->category_idea_slug}}</td>
            <td>{{$val->category_idea_desc}}</td>
            <td><span class="text-ellipsis">

            </span></td>

            <td>


              <a  href="{{URL::to('/delete-category-ideas/'.$val->category_id)}}" onclick="return confirm('Are you sure?')"  class="active styling-edit" ui-toggle-class="">

                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
               <small>{!! $category->render() !!} </small>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection
