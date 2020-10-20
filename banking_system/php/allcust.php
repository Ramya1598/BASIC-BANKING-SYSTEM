<?php 
require 'connect.php'
?>
<html>
    <head>
        <title>ALL CUSTOMERS</title>
        <h1 style="text-align: center">ALL CUSTOMER DETAILS</h1>
        <style>
            input[type=submit]{
            background-color:rgb(23, 58, 82);
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        a{
            background-color:green;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        body {
 background-color:#badc58;
 
}
        </style>
    </head>
    <body style>
        <p style="margin:20px"></p>
        
        <?php
                $query="SELECT * FROM CUST";
                $result = mysqli_query($con,$query);
            echo "<table border='0' cellspacing='10' cellpadding='10' width='50%'>
            
            <tr bgcolor='green'>
            
            <th><h3>Customer Name</h3></th>
            
            <th><h3>Account NO.</h3></th>
            
          
            <th><h3>View</h3></th>
            </tr>";
              
                if(mysqli_num_rows($result) > 0)
                {
                  while ($row = mysqli_fetch_array($result))
                  {
                   
                    $cust_name = $row['CUST_NAME'];
                    $account_no= $row['ACC_N0'];
                   
                    echo "<tr>";
                    echo "<td>".$cust_name."</td>";
                    echo "<td>".$account_no."</td>";
                    
                    echo '<td><form action="view_cust.php" method="post">
                    <input type="hidden" name="cust_name" value="'.$cust_name.'"/><input type="submit" name="" value="VIEW"></form></td>';
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