@extends('login_layout')
@section('login_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        @foreach($category_name as $key => $na)
     <center> <h2> {{$na->category_idea_name}}</h2>
     @endforeach
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
             <th>document</th>

          </tr>
        </thead>
        <tbody>
            @foreach($category_by_slug as $key => $val)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$val->idea_article}}</td>
            <td>{{$val->idea_slug}}</td>
            <td>{!! $val->idea_sum !!}</td>
            <td>{{$val->idea_document}}</td>
            <td><span class="text-ellipsis">

            </span></td>

            <td>
                <a href="{{url('/detail-idea/'.$val->idea_slug)}}"><i class="fa fa-eye "></i></a>
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
               <small>{!! $category_by_slug->render() !!} </small>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection
