<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }
        html {
            scroll-behavior: smooth;
        }
        body{
            background-image: url("image/Geometry\ Aorus.JPG");
            color: rgb(255, 255, 255);
            margin: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }
        .judul{
            text-align: center;
            padding: 10px 15px;
        }
        .logo_aorus{
            max-width: 300px;
            width: 80%;
            height: auto;
            padding: 35px 0px 10px 0px;
        }
        .navigation{
            padding: 20px 10px;
            text-align: center;
            font-size: 20px;
            background-color:#333333;
            margin-bottom:60px;
        }
        .navigation nav{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .isibody{
            margin: 0px 200px;
            text-align: left;
        }
        a{
            padding: 15px 20px;
            font-size: 20px;
            text-decoration: none;
            color: rgb(255, 255, 255);
            display: inline-block;
        }
        a:hover{
            text-shadow:rgb(255, 72, 0) 0px 0px 20px;
        }
        .zoom{
            padding: 0px 40px 0px 40px;
        }
        .zoom:hover{
            transition: 100ms;
            transform: scale(1.3); 
        }   
        .footer{
            padding: 20px;
            font-size: 20px;
            background-color:#333333;
            margin-top:100px;
        }
        .topfontpos{
            vertical-align: top;
        }
        #backtotop{
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 14px 18px;
            border-radius: 4px;
            scroll-behavior: smooth;
        }
        #backtotop:hover{
            background-color: #555;
        }
        .form{
            background-color: #ff6a00;
            border-radius: 0px 30px 0px 30px;
            text-align:left;
            max-width: 500px;
            width: 90%;
            margin: 0px auto 40px auto;
            padding: 30px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
        .form h1 {
            font-size: 24px;
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
        }
        .table, .table td, .table th{
            padding: 8px 16px;
            border: solid 2px white;
            border-collapse: collapse;
        }
        .table {
            max-width: 95%;
            margin: 20px auto;
            overflow-x: auto;
            display: block;
        }
        label{
            text-align:left;
        }
        input{
            text-align:center;
            margin-bottom: -5px;
        }
        .form input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 15px;
            text-align: left;
        }
        .form input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .form input[type="submit"]:hover {
            background-color: black;
        }
        .subjudul{
            font-size:18px;
            margin-top: 15px;
            margin-bottom:8px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .navigation {
                padding: 10px 5px;
                margin-bottom: 40px;
            }
            a {
                padding: 8px 12px;
                font-size: 16px;
            }
            .form {
                padding: 20px 20px;
                width: 92%;
            }
            .form h1 {
                font-size: 20px;
            }
            #backtotop {
                right: 15px;
                bottom: 15px;
                padding: 10px 14px;
                font-size: 16px;
            }
        }
        @media (max-width: 480px) {
            a {
                padding: 6px 10px;
                font-size: 14px;
            }
            .form {
                padding: 15px;
            }
            .form h1 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <!-- button back to top -->
    <div>
        <button onclick="topFunction()" id="backtotop" title="Go to top">Up</button>
        <script src="../script/Back To Top.js"></script>
    </div>
    <!-- button back to top -->
    <div class="judul">
        <img class="logo_aorus" src="image/Aorus Logo + Font (White).png" alt="logo_aorus">
        <p style="margin-bottom: 40px">THE NEW KING OF GAMING</p>
    </div>
    <div class="navigation">
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="product.html">Product</a>
            <a href="Product Registration.php">Product Registration</a>
        </nav>
    </div>
    <div>
        <form class="form" method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
            <h1>REGISTER YOUR PRODUCT</h1>
            <div>
                <p class="subjudul">Product Type</p>
                <input type="text" name="prodtype" placeholder="Insert your product type..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Product Name</p>
                <input type="text" name="prodname" placeholder="Insert your product name..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Serial Number</p>
                <input type="text" name="sernum" placeholder="Insert your serial number..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Purchase Date</p>
                <input type="text" name="purdate" placeholder="Insert your purchase date..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Purchase Region</p>
                <input type="text" name="purreg" placeholder="Insert your purchase region..." size=38>
                <br>
            </div>
            <div style="margin-top: 25px; padding-bottom:20px;" align=right>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div>
        <?php
            if(isset($_POST['prodname'])){
                $prodtype=$_POST['prodtype'];
                $prodname=$_POST['prodname'];
                $sernum=$_POST['sernum'];
                $purdate=$_POST['purdate'];
                $purreg=$_POST['purreg'];

                echo "<center>Product Registered!</center>";
                echo "<center>Thanks for your purchase :)</center>";
                echo "<table class='table' align='center'>";
                echo "<tr><th>Product Type</th><th>Product Name</th><th>Serial Number</th><th>Purchase Date</th><th>Purchase Region</th></tr>";
                echo "<tr><td>$prodtype</td><td>$prodname</td><td>$sernum</td><td>$purdate</td><td>$purreg</td></tr>";
            }
        ?>
    </div>
</body>
</html>