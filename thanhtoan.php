<?php
    session_start();

    require_once("./assets/controller/dbcontroller.php");
    $db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./thanhtoan.css">
     
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
    <div class="container">
        <div class="ctleft">
           
            <a href="index.html"><img class="anhbt" src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/logo.png?1591937897729" alt=""></a>
            <div class="main">
                <div class="mainl">
                    <h3>Thông tin nhận hàng</h3> 
                   
                    <input name="email" id="email" type="email" class="email" data-bind="email" placeholder="Email">
                    <input type="text" class="text" placeholder="Họ và tên">
                    <input type="text" class="text" placeholder="Số điện thoại">
                    <input type="text" class="text" placeholder="Địa chỉ">
                    <h5>Ghi chú :</h5>
                    <textarea  name="" id="" cols="41" rows="6" ></textarea>
                    
                </div>
                <div class="mainr">
                    <h3>Vận chuyển</h3> 
                    <div class="arlet">
                        <span>Vui lòng nhập thông tin thanh toán</span>
                    </div>
                    <h3>Thanh toán</h3>

    
                </div>
            </div>
            
        </div>
        <div class="ctright" style="">
            <h3>Đơn hàng</h3>
            <table class="tbl-cart">

	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        //tổng tiền bằng giá nhân số lượng
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><div class="anh">
                    <img src="<?php echo $item['image']; ?>" class="image" />

                    

                    <span class="quantity">
                    <?php echo $item["quantity"]; ?>
                    </span>
                   
                    </div></td>

				<td><?php echo $item["name"]; ?></td>
			
                
			
				<td  style="text-align:right; width: 300px;"><?php echo  number_format($item_price,2)."₫"; ?></td>
			
				</tr>
				<?php
			
		}
		?>



<tr>
    <td></td>
    <td></td>
    <td  style="text-align:right; width: 300px;"><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
</tr>
</table>
            
            
        </div>
    </div>
   
  
</body>
</html>