<!DOCTYPE html>
<html lang="en">

<head>
    <meta name=csrf-token content="{{csrf_token()}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=csrf-token content="{{csrf_token()}}">
    <title>Home</title>

    <link href="{{asset('resources/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('public/frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('public/frontend/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('public/frontend/assets/css/style.css')}}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header  -->
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-left">
                                    <div class="mu-top-email">
                                        <i class="fa fa-envelope"></i>
                                        <span>group8@gmail.com</span>
                                    </div>
                                    <div class="mu-top-phone">
                                        <i class="fa fa-phone"></i>
                                        <span>(84) 123 456</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="{{url('/Homepage')}}"><i class="fa fa-university"></i><span>University of Greenwich</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="active"><a href="{{url('/Homepage')}}">Home</a></li>

                        @if( Auth::user())
                        <li><a href="{{url('/show-dashboard')}}">Dashboard</a></li>
                        @endif
                        <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>

                                @if( Auth::user())
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                                @else
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Sign in <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/login')}}">Login</a></li>
                                <li><a href="#">Sign up</a></li>
                            </ul>
                            @endif
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->
    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-sm-9 padding-left">

                                @yield('content')

                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>All Topic Departments</h3>
                                        <ul class="mu-sidebar-catg">
                                        @foreach($category as $key => $cate)
                                            <li><a href="{{url('/show-by-category/'. $cate->category_idea_slug)}}">{{$cate->category_idea_name}}</a></li>

                                        @endforeach
                                        </ul>
                                    </div>
                                @if(Auth::user())
                                    @foreach($topic as $key => $topic)
                                    <div class="mu-single-sidebar timer" >
                                        <div style="color:red;">

                                            <!-- <input type="hidden" data-id_ideas="{{$topic->topic_id}}"  class="clock" value="{{ $topic->due_date}}"> -->

                                            <lable>Due Date for topic {{$topic->topic_name}}:</lable>
                                            <!-- <p id="countdown"></p> -->

                                            <script>
                                                    function createCountDown(elementId, date) {
                                                    // Set the date we're counting down to
                                                    var countDownDate = new Date(date).getTime();

                                                    // Update the count down every 1 second
                                                    var x = setInterval(function() {

                                                    // Get todays date and time
                                                    var now = new Date().getTime();

                                                    // Find the distance between now an the count down date
                                                    var distance = countDownDate - now;

                                                    // Time calculations for days, hours, minutes and seconds
                                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                    // Display the result in the element with id="demo"
                                                    document.getElementById(elementId).innerHTML = days + "d " + hours + "h "
                                                    + minutes + "m " + seconds + "s ";

                                                    // If the count down is finished, write some text
                                                    if (distance < 0) {
                                                        clearInterval(x);
                                                        document.getElementById(elementId).innerHTML = "TIME TO SUBMIT THIS TOPIC IS EXPIRED";
                                                        var submitidea = document.getElementById("id_{{$topic->topic_id}}");
                                                        submitidea.remove(); //time out
                                                    }
                                                    }, 1000);
                                                }
                                                createCountDown('{{$topic->topic_id}}', "{{ $topic->due_date}}")
                                                </script>
                                                <p id="{{$topic->topic_id}}"></p>
                                        </div>
                                        <div id='id_{{$topic->topic_id}}'>
                                            <h3>Add the idea</h3>
                                            <ul class="mu-sidebar-catg">
                                                <li><a href="{{url('/submit-idea')}}">Submit new idea here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                                <!-- <p id="demo5"></p>
                                <p id="demo8"></p>
                                <p id="demo10"></p>
                                <p id="demo430"></p> -->

                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Popular idea</h3>
                                        <div class="mu-sidebar-popular-courses">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/frontend/assets/img/courses/1.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Medical Science</a></h4>
                                                    <span class="popular-course-price">$200.00</span>
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





    <!-- Start footer -->
    <footer id="mu-footer">
        <!-- start footer top -->
        <div class="mu-footer-top">
            <div class="container">
                <div class="mu-footer-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="">Course</a></li>
                                    <li><a href="">Event</a></li>
                                    <li><a href="">Sitemap</a></li>
                                    <li><a href="">Term Of Use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Student Help</h4>
                                <ul>
                                    <li><a href="">Get Started</a></li>
                                    <li><a href="#">My Questions</a></li>
                                    <li><a href="">Download Files</a></li>
                                    <li><a href="">Latest Course</a></li>
                                    <li><a href="">Academic News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>News letter</h4>
                                <p>Get latest update, news & academic offers</p>
                                <form class="mu-subscribe-form">
                                    <input type="email" placeholder="Type your Email">
                                    <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Contact</h4>
                                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p>&copy; All Right Reserved. Designed by <a href="" rel="nofollow">MarkUps.io</a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

    <!-- jQuery library -->
    <script src="{{asset('public/frontend/assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('public/frontend/assets/js/bootstrap.js')}}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{asset('public/frontend/assets/js/slick.js')}}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{asset('public/frontend/assets/js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/assets/js/jquery.counterup.js')}}"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="{{asset('public/frontend/assets/js/jquery.mixitup.js')}}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{asset('public/frontend/assets/js/jquery.fancybox.pack.js')}}"></script>
    <!-- ck editor -->
    <script src="{{asset('public/backend/ck/ckeditor/ckeditor.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('public/frontend/assets/js/custom.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{asset('public/backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('public/backend/js/demo/chart-pie-demo.js')}}"></script>
    <script type="text/javascript">
    function ChangeToSlug()
    {
        var slug;
        //Lấy text từ thẻ input title
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
        document.getElementById('convert_slug').value = slug;
    }
</script>
<script>
$(document).ready(function(){
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
   $(".likePost").click(function(){
      $.ajax({
         url: '{{route('ajaxLike')}}',
         type: 'POST',
         data: {
            _token: CSRF_TOKEN,
            id: $(this).data("like"),
         },
         dataType: 'JSON',
         success: function() {
            location.reload();
         }
      });
   });
});
</script>
<!-- <script>
        var id = $('.clock').data('id_ideas');
        // alert(id);
        // var cd = $('.cd').val();
        var count = $('.clock').val();
        // alert(count);
        // alert(cd);
// alert (count);
// Set the date we're counting down to
var countDownDate = new Date(count).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
    var submitidea = document.getElementById("submitidea");
    submitidea.remove(); //time out
  }
}, 1000);
</script>
<script>
    function createCountDown(elementId, date) {
	// Set the date we're counting down to
	var countDownDate = new Date(date).getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get todays date and time
	  var now = new Date().getTime();

	  // Find the distance between now an the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="demo"
	  document.getElementById(elementId).innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById(elementId).innerHTML = "ORDER EXPIRED";
	  }
	}, 1000);
}

createCountDown('demo5', "2022-07-26 18:00:00")
createCountDown('demo8', "2022-07-27 14:00:00")
createCountDown('demo10', "2022-07-27 10:04:30")
createCountDown('demo430', "2022-07-28 20:10:50")

</script> -->
</body>

</html>
