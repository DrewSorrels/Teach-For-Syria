<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Volunteer Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-pencil" ></i>  <span class="light">Teach for</span> Syria
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#profile" data-toggle="modal" data-target="#profile">Profile</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Collaborate</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Locate NGO</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#training">Teacher Training</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <section id="about" class="container content-section text-center">
             <div class="row">
                <h2>Welcome, Suhem</h2><br>
        <div class="col-md-4">
          <h3>Connect with an NGO</h3>
          <i class="fa fa-users fa-5x"></i>
          <p>You can find out places around you where you can volunteer to teach and schedule time with them!</p>
        </div>
        <div class="col-md-4">
          <h3>Collaborate</h3>
          <i class="fa fa-comments-o fa-5x"></i>
          <p>If you are an educator, you can collaborate with others and make a sustainable education to be taught at a refugee camp! </p>
       </div>
        <div class="col-md-4">
          <h3>Teacher Training</h3>
          <i class="fa fa-pencil-square fa-5x"></i>
          <p>If you are a new volunteer, please visit the Teacher Training tab to get tips on how to teach in such a crisis situation</p>
        </div>
         <div class="page-scroll">
                            <a href="#download" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                </div>
        </div>
    </section>

       <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Collaborate</h2>
                    <p>If you are a teacher or an educator, please collaborate and submit your proposed sustainable eductation model here!</p>
                    <a href="board.php" class="btn btn-success btn-lg"><i class="fa fa-book fa-fw"></i> <span class="network-name">Collaborate Now</span></a>
                </div>
        </div>
    </section>

     <section id="contact" class="container content-section text-center">
        <div class="row row1">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Locate an NGO or School serving refugees around you</h2>
                <p>You can schedule some time to go and teach at these schools or donate school supplies</p>
                    <a href="locate.php" class="btn btn-default btn-lg"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name">Locate Now!</span></a>
            </div>
        </div>
    </section>

       <section id="training" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Teach Underprivileged Children</h2>
                    <p>If you are available, consider signing up to teach a course provided by teachers all over the world!  One of the major issues that volunteers face is the lack of curriculum for children.  A schedule has been extremely helpful to volunteers who have not known what to teach.  Sign up today!</p>
                    <!--<a href="board.php" class="btn btn-success btn-lg"><i class="fa fa-book fa-fw"></i> <span class="network-name">Collaborate Now</span></a>-->
                </div>
        </div>
    </section>

     <div class="modal fade" id="profile" style="color:Black;">
              <div class="modal-dialog">
                 <div class="modal-content">
                      <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <center><h3 class="modal-title"><b>Profile</b></h3></center>
                      </div>
                <div class="modal-body">
                  <p style="text-align:center;"><img src="img/book.png" class="img-polaroid"></p>
                    <p><b>Name:</b> Suhem Parack</p>
                    <p><b>Country:</b> Jordan</p>
                    <p><b>Teaching Interest:</b> Math</p>
                    <p><b>Places Taught:</b> Zaatari Camp, Amman</p>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </div><!-- /.modal-content -->
             </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
