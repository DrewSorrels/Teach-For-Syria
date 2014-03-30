<?php
    if($_POST['formSubmit'] == "Submit") 
    {
        $errorMessage = "";
        
        if(empty($_POST['formName'])) 
        {
            $errorMessage .= "<li>You forgot to enter a name</li>";
        }
        if(empty($_POST['formEmail'])) 
        {
            $errorMessage .= "<li>You forgot to enter a email/li>";
        }
        if(empty($_POST['formPass'])) 
        {
            $errorMessage .= "<li>You forgot to select your password</li>";
        }
         if(empty($_POST['formNumber'])) 
        {
            $errorMessage .= "<li>You forgot to select your number</li>";
        }
         if(empty($_POST['formCountry'])) 
        {
            $errorMessage .= "<li>You forgot to select your country</li>";
        }
         if(empty($_POST['formTeach'])) 
        {
            $errorMessage .= "<li>You forgot to select your teach</li>";
        }

        $varName = $_POST['formName'];
        $varEmail = $_POST['formEmail'];
        $varPass = $_POST['formPass'];
        $varPhone = $_POST['formNumber'];
        $varCountry = $_POST['formCountry'];
        $varTeach = $_POST['formTeach'];

        if(empty($errorMessage)) 
        {
            $db = mysql_connect("localhost","root","");
            if(!$db) die("Error connecting to MySQL database.");
            mysql_select_db("user" ,$db);

            $sql = "INSERT INTO user (name, email, password, phone, country, teach) VALUES (".
                            PrepSQL($varName) . ", " .
                            PrepSQL($varEmail) . ", " .
                            PrepSQL($varPass) . ", " .
                            PrepSQL($varPhone) . ", " .
                            PrepSQL($varCountry) . ", " .
                            PrepSQL($varTeach) . ")";
            mysql_query($sql);
            
            header("Location: success.php");
            exit();
        }
    }
            
    // function: PrepSQL()
    // use stripslashes and mysql_real_escape_string PHP functions
    // to sanitize a string for use in an SQL query
    //
    // also puts single quotes around the string
    //
    function PrepSQL($value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }

        // Quote
        $value = "'" . mysql_real_escape_string($value) . "'";

        return($value);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teach For Syria</title>

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
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Volunteer</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="font-size:75px;">Teach For Syria</h1>
                        <p class="intro-text" style="font-size:20px;">Teach For Syria is a collaboration platform for teachers or volunteers who wish to teach Syrian refugee children at refugee camps in their own countries, but do not have access to a sustainable educational course syllabus to teach in a refugee camp environment.</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Teach For Syria</h2>
                <p>The civil war in Syria has resulted in 1.25 million children refugees living in countries around Syria such as Turkey, Jordan, Lebanon etc. with almost no access to any form of education. Instead of pursuing education, 1 in 10 refugee children are working as cheap laborers in cafes, repair shops or simply beg on the streets. Before the violence began, 97% of school-age children in Syria were enrolled in school and literacy rates surpassed the regional average but after the start of the war, just 30% of Syrian children have access to education.</p>
                <p>There are teachers & volunteers in such countries who want to teach and educate the children, but given the complex situation of the war affected refugee kids, the volunteers don't have an effective education model to teach.</p>
                <p>Teach For Syria aims at providing a platform for such volunteers and educators from around the world to collaborate together and devise sustainable education models, fit for children affected by the civil war. This portal also lets volunteers identify which NGO is working and which refugee camp and sign up to volunteer based on their educational background and availabilty.</p>
                 <div class="page-scroll">
                            <a href="#download" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Volunteer To Teach</h2>
                    <p>If you are pro-education, if your country is hosting syrian refugees and if you believe that they deserve education, sign up now and volunteer to teach at refugee camp whenever you are free!</p>
                </div>
                 <div class="row">
        <div class="col-md-4">
          <h3>Teach</h3>
          <i class="fa fa-pencil-square fa-5x"></i>
          <p>Based on your experience, help the Syrian children by teaching them numbers, alphabets etc. Remember, an entire generation of children is under the threat of losing education </p>
        </div>
        <div class="col-md-4">
          <h3>Collaborate</h3>
          <i class="fa fa-comments-o fa-5x"></i>
          <p>Use our collaboration tools to work with international educators in order to develop a sustainable refugee education model </p>
       </div>
        <div class="col-md-4">
          <h3>Connect with an NGO</h3>
          <i class="fa fa-users fa-5x"></i>
          <p>Locate NGOs working in your country and schedule time when you would like to teach, what you would like to teach</p>
        </div>
          <div class="col-lg-8 col-lg-offset-2">
                    <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#signUpModal"> <i class="fa fa-user fa-fw"></i>Volunteer Sign Up</button>
            </div>
        </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row row1">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Teach For Syria</h2>
                <p>Feel free to email us with any suggestions that you may have</p>
                <p>sparack@gmu.edu</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

            <div class="modal fade" id="signUpModal" style="color:Black;">
              <div class="modal-dialog">
                 <div class="modal-content">
                      <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <center><h3 class="modal-title"><b>Volunteer Sign up</b></h3></center>
                      </div>
                <div class="modal-body">
<?php
            if(!empty($errorMessage)) 
            {
                echo("<p>There was an error with your form:</p>\n");
                echo("<ul>" . $errorMessage . "</ul>\n");
            }
        ?>

        <form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for='formName'>Full Name</label><br/>
                <input type="text" name="formName" maxlength="50" value="" class="form-control" placeholder="Enter your name"/>
            </div>
            <div class="form-group">
                <label for='formEmail'>Email Address</label><br/>
                <input type="text" name="formEmail" maxlength="50" value="" type="email" class="form-control" placeholder="Enter email"/>
            </div>
            <div class="form-group">
                <label for='formPass'>Password</label><br/>
                <input name="formPass" maxlength="50" value="" type="password" class="form-control" placeholder="Enter password"/>
            </div>
            <div class="form-group">
                <label for='formNumber'>Phone Number</label><br/>
                <input type="text" name="formNumber" maxlength="50" value="" type="text" class="form-control" placeholder="Enter Phone Number"/>
            </div>
            <div class="form-group">
                <label for='formCountry'>Select Your Country</label><br/>
                <select name="formCountry" class="form-control selectpicker">
                    <option value="">Select Stock</option>
                    <option value="JOR"<? if($varStock=="JOR") echo(" selected=\"selected\"");?>>Jordan</option>
                    <option value="TUR"<? if($varStock=="TUR") echo(" selected=\"selected\"");?>>Turkey</option>
                    <option value="LEB"<? if($varStock=="LEB") echo(" selected=\"selected\"");?>>Lebanon</option>
                </select>
            </div>
                <div class="form-group">
                <label for='formTeach'>What can you teach?</label><br/>
                <input type="text" name="formTeach" maxlength="100" value="" class="form-control" placeholder="Enter your educational background"/>
            </div>
            <input type="submit" name="formSubmit" value="Submit" class="btn btn-primary"/>
        </form>
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


    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
