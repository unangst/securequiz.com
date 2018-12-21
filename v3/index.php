<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eric Unangst">
    <link rel="shortcut icon" href="http://securequiz.com/favicon.ico" type="image/x-icon" />
    <title>SecureQuiz.com</title>
    
    <script src="https://use.fontawesome.com/d142fc3274.js"></script>
    
    <!-- Bootstrap Core CSS -->
     <link href="http://securequiz.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Theme CSS -->
     <link href="http://securequiz.com/css/securequiz.min.css" rel="stylesheet"> 

    <!-- Custom Fonts -->
     <link href="http://securequiz.com/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> 
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    
        $('#input').keyup(function(){
        var s= $(this).val();
        if (s.indexOf("GOOGLE") != -1)
            window.location.replace(" http://securequiz.com/404");
        if (s.indexOf("google") != -1)
            window.location.replace(" http://securequiz.com/404");
        if (s.indexOf("Google") != -1)
            window.location.replace(" http://securequiz.com/404");
    });

    $('#button').click(function(e) {  
        var inputvalue = $("#input").val();
        window.location.replace(" http://bit.ly/"+inputvalue);

    });
    
    
    
});
</script> 
</head>

<body id="page-top" class="index">


 <!-- Navigation -->       
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <img src="http://securequiz.com/img/secure_quiz_sticker.png" width="400"><br>
               The secure testing app for Chromebooks.
            </div>

        </div>

        <!-- /.container-fluid -->
    </nav>

    <header>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<div class="intro-text">
                        <span class="name">Access Code?<br>
              <input type="text" value="" maxlength="7" style="width:50%" id="input"><button type="button" id="button">Go</button> 
                            <a href="http://bit.ly/2pXqrJJ">&#42;</a>
                                       
                    </div>
           </span>  
                </div>
            </div>
        </div>
    </header>
<!-- Footer -->
    <footer class="text-center">
                        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        SecureQuiz.com | API v1.8 | App v11.4.18<br>
                        &copy; <script type="text/javascript">  document.write(new Date().getFullYear()); </script><br>
                        Handcrafted by Eric @Unangst 
                    </div>
                </div>
            </div>
        </div>
   
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <!-- Google Analytics code goes here -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85975399-3', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
