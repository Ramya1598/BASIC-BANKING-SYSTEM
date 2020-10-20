<?php 
require 'connect.php'
?>
<html>
    <head>
        <title>CUSTOMER DETAILS</title>
        <style>
        body {
        
        background-color:#badc58;
        }
        input[type=button]{
            background-color: rgb(23, 58, 82);
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        </style>
    </head>
    <body >
    
        <br>
    <h1 align='center'>CUSTOMER DETAILS</h1><br>
<?php

if(isset($_POST['cust_name'])){
    $customer=$_POST['cust_name']; 
    
    if($customer!=''){ 
        $query="SELECT * FROM CUST WHERE CUST_NAME='$customer'";
        $result = mysqli_query($con,$query);
        while ($row = mysqli_fetch_array($result))
        {
        $customer_name = $row["CUST_NAME"];
        $acc_no = $row["ACC_N0"];
        $email = $row["EMAIL"];
        $phone = $row["PH_NO"];
        $balance = $row["BANK_BAL"];
        $address=$row["ADDRESS"];
        $city=$row["city"];
        $bank_branch=$row["BANK_BRANCH"];
       echo "<h3>Name: " .$customer_name. "<br>"; 
       echo"<br>";
       echo "Account_NO: ". $acc_no. "<br>";
       echo"<br>";
       echo "Email: ".$email."<br>";
       echo"<br>";
       echo "Phone_NO: ".$phone."<br>";
       echo"<br>";
       echo "Address: ".$address."<br>";
       echo"<br>";
       echo "City: ".$city."<br>";
       echo"<br>";
       echo "Bank Branch: ".$bank_branch."<br>";
       echo"<br>";
       echo "Bank Balance: ".$balance."<br></h3>";
       echo"<br>";
        }
      
      } 
    else{
        echo "no results";
    }
}
echo '<button ><a href="transfer.php ? cus_nam='.$customer_name.' & acc='.$acc_no.' & bal='.$balance.'">TRANSFER</a></button>';

?>
<br>
<br>
<input type="button" onclick="location.href='allcust.php'" value="BACK"/>
</body>

</html>
