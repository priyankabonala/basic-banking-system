<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>THE SPARKS FOUNDATION BANK</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(255,255,255) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body style="background-color:violet;">

<div id="lock"><img src="https://w7.pngwing.com/pngs/223/204/png-transparent-bank-logo-bank-saving-bank-pic-building-structure-bank.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:white; margin-top: 20px;"><b>Please rotate your device. </b><br> landscape mode is only supported.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px blue;
            border-radius: 30px;
            background-color: blue;
            font-weight: bold;
            color: whitesmoke;
        }

        .mybtn:active {
            background-color: light pink;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:20px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa73YUNSKPZExgVG3FIXbabApNgEOxQFmiow&usqp=CAU" alt=""
                    style="height: 50px; margin-left:15px; margin-top:3px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="font-family:Footlight MT ;font-size:30px;color:black;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="home.php">THE SPARKS BANK</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Transfer money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Me</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <!--<div class="container-large"
        style="color:white; height:500px; width: 100%; padding:10% 2% 2% 2%; background-color:#4b3ddb;">
        <div class="row">
            <div class="col" style="margin-left: 30%;">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-family:forte;size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to Sparks
                        Bank!</b></p>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                &nbsp;<img src="" class="zoomin" alt="" style="width:0px;">
            </div>
        </div>
    </div>
    <img src="" alt="" style="width:100%; position:absolute; z-index:-1">-->

    <center style="margin:50px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;background-color:pink">
            <div class="col">
            <br><br>&nbsp;<p class="zoomfont"
            style="font-family:Footlight MT;text-shadow:2px 2px 2px white; color:black;"><b>WELCOME TO SPARKS BANK</b></p>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:violet; color:black; width: 90%; border-radius:30px; box-shadow:3px 3px 8px grey; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="customers.jpg"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6> You can view customers.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:pink; color:black; width: 90%;padding:20px 10px 20px 10px;">
                            <div class="col">
                               &nbsp;<img src="https://creditcard.paymatrix.in/hubfs/Credit%20card%20to%20Bank%20account.png"alt="" style="width:400px;">
                            </div>
                            <!--<i class="fas fa-bank fa-7x" style="font-size:150px"></i><br><br>
    
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Audit
                                    Balance</button></a><br>
                            <h6> You can check the remaining balance in your account.</h6>-->
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:violet; color:black; width: 90%; border-radius:30px; box-shadow:3px 3px 8px grey; padding:20px 10px 20px 10px;">
                            <i class="fas fa-rupee-sign fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>You can transfer money from your account.</h6>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>