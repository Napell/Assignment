<!Doctype html>
<html>
    <head>
            <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
        
            <!-- Custom styles -->
            <link type="text/css" href="style.css" rel="stylesheet">
            <script src="bootstrap.min.js"></script>

    
            <script src="jquery-1.11.3.min.js"></script>
    </head>
    <body>
            <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <!--a class="navbar-brand" href="1.%20EthicalAi.php"><img src="/Images/Logo/ethical.png" height="60px" width="220px"></a-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <ul class="navbar-nav mr-auto"></ul>
                            
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                        <a id="aboutUs" class="nav-link lead" href="page.html">Home |</a>
                                    </li>
                                <li class="nav-item">
                                        <a id="aboutUs" class="nav-link lead" href="scan.html">Scan Now |</a>
                                    </li>
                            
                            <li class="nav-item">
                                <a id="aboutUs" class="nav-link lead" href="page.html">About Us |</a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a id="contactUs" class="nav-link lead" href="page.html">Contact Us |</a>
                            
                            </li>
                            <li class="nav-item">
                                    <a id="aboutUs" class="nav-link lead" href="feedback.html">Feedback</a>

                                </li>
                             </ul>
                           </div>


                </nav><!-- end of navbar-->
                <div class="box">
                    
                <?php iclude('connect.php');?>
                <?php
                $act_query = $conn->query("SELECT * FROM `nestle` where id='".$_SESSION['id']."'") or die(mysqli_error());
                while($act_fetch = $act_query->fetch_array()){
                ?>
                <h1></h1>

                <?php
                }

                ?>
                </div>



                
                    <script src="script.js"></script>
    </body>
</html>