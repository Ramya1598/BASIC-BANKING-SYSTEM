<?php
		$cust_name = $_GET['cus_nam'];
        $acc_num = $_GET['acc'];
        $cur_bal = $_GET['bal'];
		//echo "Number: ".$acc_num."  name: ".$cust_name. "currentbalance: ".$cur_bal;
	?>
<html>
    <head>
        <title>TRANFER</title>
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
        input[type=submit]{
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
    <body>
        <br>
        <h2>Enter Transfer Details:</h2>
        <h3 style="color:blue;">Current Balance:   <?php echo $cur_bal;?></h3>
        <form action="trans_amt.php" method="get">
            <table>
            
            <tr><td><h3>FROM: </h3></td><td><input type="text" name="from" id="amt" value="<?php echo htmlspecialchars($acc_num); ?>" readonly></td></tr>   
            <tr><td><h3>TO: </h3></td><td><input type="text" name="to" id=""></td></tr>
            <tr><td><h3>AMOUNT: </h3></td><td><input type="text" name="amt" id=""></td></tr>
            </table>
            <div>
                <input type="submit" value="TRANSFER" name="search">
            </div>
        </form>
        
    </body>
</html>
