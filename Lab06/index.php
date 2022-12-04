<?php
	$name = "";
	$buyingPrice = "";
	$sellingPrice = "";
    $isDisplay = 0;

	if(isset($_POST['save']))
    {
		$name = $_POST['name'];
		$buyingPrice = $_POST['buyingPrice'];
		$sellingPrice = $_POST['sellingPrice'];

        // try {
        //     $isDisplay = $_POST['isDisplay'];
        // } catch (Exception $e) {
        //     $isDisplay = 0;
        // }


		if ($name == "" || $buyingPrice == "" || $sellingPrice == "")
        {
		    echo "Name, BuyingPrice and SellingPrice are required!";
		} 
        else
        {
            $con = mysqli_connect('localhost', 'root', '', 'product_db');
            
            $sql = "insert into products values('{$name}', '{$buyingPrice}', '{$sellingPrice}', {$isDisplay})";
            $status = mysqli_query($con, $sql);
		    
            if($status)
            {
                echo "Product saved successfully";
            }
            else 
            {
                echo "Failed to save product in database";
            }
		}
	}
?>
<html>
<head>
    <title>Add Product</title>
</head>

<body>
    <form action="#" method="POST">
        <table align="center" width="20%">
            <tr>
                <td align="center">
                    <fieldset>
                        <legend>ADD PRODUCT</legend>
                        <table>
                            <tr>
                                <th> Name <br /> </th>
                                <td>
                                    <input type="text" name="name" value="" placeholder="" />
                                </td>
                            </tr>
                            <tr>
                                <th> Buying Price <br /> </th>
                                <td>
                                    <input type="text" name="buyingPrice" value="" placeholder="" />
                                </td>
                            </tr>
                            <tr>
                                <th> Selling Price <br /> </th>
                                <td>
                                    <input type="text" name="sellingPrice" value="" placeholder="" />
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <hr>
                                    <input type="checkbox" name="isDisplay" value="1" /> Display
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <hr>
                                    <input type="submit" name="save" value="SAVE">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>