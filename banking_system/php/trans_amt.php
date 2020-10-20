<?php 
    require 'connect.php'
?>
<html>
    <head>
        <title>Transfer amount</title>
    </head>
    <style>
        button{
            background-color: rgb(23, 58, 82);
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 6px 2px;
            cursor: pointer;
            text-align: center;
        }
        .center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    </style>
    <body bgcolor='LightGrey'>
<?php
if(isset($_GET['search'])){
    $from=$_GET['from']; 
    $to=$_GET['to'];
    $amt=$_GET['amt'];
    if($amt!=0 && $to!=0){ 
        
        $query="UPDATE cust
                SET BANK_BAL=BANK_BAL - $amt
                WHERE ACC_N0='$from'";
        $query2="UPDATE cust
                SET BANK_BAL=BANK_BAL + $amt
                WHERE ACC_N0='$to'";
        $result = mysqli_query($con,$query);
        $result2 = mysqli_query($con,$query2);
        ?>
        <br>
        <br>
        <h1 style="color:green; text-align:center;">MONEY TRANSFER SUCCESSFUL</h1>
        <div class="center">
        ...................<img src="image\checkmark.gif" alt="bank system" width="300" height="200">..............
        <br>
        <br>
        <br>
        <button onclick="myFunction()">VIEW ALL CUSTOMER</button>
        <a href='../home.html'><button>BACK TO HOME PAGE</button></a>
    </div>

<script>
function myFunction() {
  location.replace("allcustdetail.php")
}

</script>
<?php
    }
    else{
        echo '<script>alert("enter both account no and amount to be transfered")</script>';
       

    }  
}  
?>

</body>
</html>
