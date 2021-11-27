<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript">
        function pass(roll){
            var cookies=document.cookie.split(';');
            for(var i=0;i<cookies.length;i++)
            {
                var cookie=cookies[i];
                var eqPos=cookie.indexOf('=');
                var name=eqPos>-1? cookie.substr(0,eqPos) : cookie;
                document.cookie=name+ "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
            document.getElementById("show").style.display="none";
        }
    function fill(Value) {
        $('#search').val(Value);
        $('#display').hide();
    }
    $(document).ready(function() {

        $("#search").keyup(function() {

            var name = $('#search').val();
            if (name == "") {
                $("#display").html("");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: {
                        search: name
                    },
                    success: function(html) {
                    $("#display").html(html).show();
                    }
                });
            }
        });
    });   
    </script>
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <img src="https://indusuni.ac.in/wp-content/uploads/2019/04/logo.png" alt="Indus University" height="40" />
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html#top">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumni.php">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html#News">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html#events">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html#bottom">Contacts</a>
                </li>
                <!--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                            -->
            </ul>
            <div class="col-md-3 text-end">
                <a href="login.html"><button type="button" class="btn btn-outline-primary m-2 ">Login</button></a>
                <a href="Registration.html"><button type="button" class="btn btn-primary m-2">Register</button></a>
            </div>
            
        </div>
    </div>
</nav>

<h1 style="margin-top: 80px;" align="center" style="font-family: cursive; " class="display-4">Search for Alumni</h1>
	<div class="container col-md-4" >
		<form  class="d-flex">
        	<input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
        	<button class="btn btn-outline-success" type="submit">Search</button>

    	</form>
    </div>
    <br>
    <div >
    <div  class="container col-md-3  z-index-1 " style="margin-top: -10px; ">
        <div class="list-group" id="display">
            
        </div>
    </div>
    </div>
    <style type="text/css">
        .p {
        background-color: rgb(195, 243, 243);
        font-size: large;
        padding-left: 3%;
        padding-right: 3%;
    }
    
    </style>
    <div style="position: absolute; z-index: -200; top: 300px;">
        <h1 class="d-flex justify-content-center">Notable Alumni and events</h1>
        <div class="row col-md-12"  style="margin-left: 30px; margin-bottom: 30px;">
                
            
            <div  class="col-xs-4 d-flex p">
                <div class="col-xs-4 d-flex" >
                    <img style=""  src="../img/alumni2.jpeg" alt="">
                </div>
                "RECONNECT 2020" was organized   to reunite and cherish all the joys and golden Memories of our alumnus.190+ total participants were there.
                Aim was to elucidate the prospects of pursuing abroad studies and also clarify queries of the students as how to go about doing the same.Also other session has given insight into the IT fields currently having more feasible opportunities and elaborated on the essentials for getting good jobs.
                <br><br>
                An alumni event ‘Let's Talk Careers!’ was organized by The Alumni Association of Indus University on 20th August 2021under the title "Let's talk about the career opportunities and higher education in India."
                The focus of the session was to elucidate the prospects of pursuing further studies and career options in India and also clarified queries of the students as to how to go about doing the same. Also, it gave insights into the IT fields currently having more feasible opportunities and elaborated on the essentials for getting good jobs.<br><br>
                An interactive discussion was conducted by Mr. Debjyoti Das Adhikary(Alumni) about people's knowledge of our own nation where some of the very underrated/unexplored career options in our own country was narrated.Options spanning from entrepreneur opportunities, Indian Administrative Services, Navy, the research scope  in DRDO, BARC, ISRO, IISER was discussed in depth.
                Highlights of the event:<br><br>
                Expert talk on "Let's talk about the career opportunities and higher education in India" by Debjyoti Das Adhikary(Alumni 2013-batch), PhD Research scholar in the department of Computer Science & Engineering in Indian Institute of Technology, Kharagpur.   
            </div>
            
        </div>
        <div  class="row col-md-6">
            <div  class="col-xs-4 d-flex p" style="margin-left: 50px;">
                <div id="carouselExampleControls" class="carousel slide col-xs-4 d-flex" data-bs-ride="carousel" style="width: 30%; max-width: 800px;" >
                    <div class="carousel-inner">
                        <div class="carousel-item active " >
                            <img style="object-fit: cover; height: 200px;" src="../img/alumni1.jpeg" class="d-block w-100 img-thumbnail" alt="Campus">
                        </div>
                        <div class="carousel-item">
                            <img style="object-fit: cover; height: 200px;"  src="../img/alumni3.png" class="d-block w-100 img-thumbnail" alt="Convocation">
                        </div>
                        <div class="carousel-item">
                            <img style="object-fit: cover; height: 200px; "  src="../img/alumni4.png" class="d-block w-100 img-thumbnail" alt="Solar Panel">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div style="margin-left:20px;" class="col-md-7">
                Dhyani Dave is an Indian Chess player. She holds the Woman International Master title. She has won gold medals at the Under 14 Asian Chess Championship and the Under 16 Commonwealth Chess Championship. She is a silver medalist at the Under 10 Asian Championship and the Under 12 Commonwealth Championship
                <br><br>
                </div>
            </div>
                 
        </div>   
    </div>
    <div  ><?php if(isset($_COOKIE['roll']))
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="alumni";
        $uid=$_COOKIE['roll'];
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="select * from students where U_ID = '$uid'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            $final=$result->fetch_assoc();
        }
        else{
            $sql="select * from faculty where U_ID = '$uid'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                $final=$result->fetch_assoc();
            }
            else{
                echo "Not Found";
            }
        }

        ?>
        <style>
    .bg-modal{
        width: 100%;
        height:  100%;
        background-color: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .modal-content{
        width: 500px;
        height: 300px;
        background-color: white;
        border-radius: 4px;
    }
    .close{
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 35px;
        transform: rotate(45deg);
        cursor: pointer;
    }
    #show{
        display: flex;
    }
</style>
<div id="show" class="bg-modal">
    <div class="modal-content">
        <div onclick="pass('<?php echo $final['U_ID']; ?>')" class="close">+</div>
        <?php echo '<img style="align-self: center; margin-top: 10px; height: 100px; width:100px;" src="data:image/jpeg;base64,'.base64_encode($final['pic']).'">';?>
        <blockquote style="align-self: center;" class="h6"><?php echo $final['f_name']." ".$final['m_name']." ".$final['l_name']; ?></blockquote>
        <div style="align-self: center; " ><strong>Email:</strong>    
        <a style="text-decoration: none; align-self: center;" href="mailto: <?php echo $final['email'];?>"><?php echo $final['email']; ?></a>
        </div>
        <div  style="align-self: center;">
            <strong  >About</strong>
            <div>
                <?php echo $final['description']; ?>
            </div>
        </div>
    </div>
</div>
        <?php
    } ?></div>
</div>   
<br>
        
</body>
</html>