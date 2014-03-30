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
    <link rel="stylesheet" type="text/css" href="css/yourCourses.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/yourCourses.js"></script>

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
                        <a href="#contact">Teacher Training</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <section id="about" class="container content-section text-center">
    <div class="row">
    <div id='header'>
    <div class="addCourse btn btn-danger btn-lg"><i class="fa fa-pencil" ></i>Add a suggested education plan</div>
    </div><br><br><br>
    <div id='content'>
    <div id='courses'>
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
