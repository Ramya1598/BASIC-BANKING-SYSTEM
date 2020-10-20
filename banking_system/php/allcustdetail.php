<?php 
require 'connect.php'
?>
<html>
    <head>
        <title>ALL CUSTOMERS</title>
        <h1 style="text-align: center">ALL CUSTOMER DETAILS</h1>
        <style>
             background-image:url('bank.jpg')
        </style>
    </head>
    <body>
        <p style="margin:20px">If u want to view all details of particular customer, then click on view button</p>
        <?php
                $query="SELECT * FROM CUST";
                $result = mysqli_query($con,$query);
            echo "<table border='0' cellspacing='10' cellpadding='10' width='50%'>
            
            <tr bgcolor='lightseagreen'>
            <th><h3>Customer Name</h3></th>
            <th><h3>Account NO.</h3></th>
            <th><h3>EMAIL</h3></th>
            <th><h3>Phone_NO</h3></th>
            <th><h3>Address</h3></th>
            <th><h3>City</h3></th>
            <th><h3>Bank Branch</h3></th>
            <th><h3>Bank Balance</h3></th>
            </tr>";
              
                if(mysqli_num_rows($result) > 0)
                {
                  while ($row = mysqli_fetch_array($result))
                  {
                   
                    $cust_name = $row['CUST_NAME'];
                    $account_no= $row['ACC_N0'];
                    $email=$row['EMAIL'];
                    $ph_no=$row['PH_NO'];
                    $add=$row['ADDRESS'];
                    $city=$row['city'];
                    $b_branch=$row['BANK_BRANCH'];
                    $b_bal=$row['BANK_BAL'];
                    echo "<tr>";
                    echo "<td>".$cust_name."</td>";
                    echo "<td>".$account_no."</td>";
                    echo "<td>".$email."</td>";
                    echo "<td>".$ph_no."</td>";
                    echo "<td>".$add."</td>";
                    echo "<td>".$city."</td>";
                    echo "<td>".$b_branch."</td>";
                    echo "<td>".$b_bal."</td>";
                    //echo '<td><form action="view_cust.php" method="post">
                    //<input type="hidden" name="cust_name" value="'.$cust_name.'"/><input type="submit" name="" value="VIEW"></form></td>';
                    echo "</tr>";
                  }
                  
                  echo "<td > <a href='../home.html'><button>BACK</button></a></td>";
                }
                else{
                    echo "no results";
                }
            
            ?>
    </body>
</html>