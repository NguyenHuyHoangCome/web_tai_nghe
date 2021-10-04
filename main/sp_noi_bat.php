<?php

$sql_pro1 = "SELECT * FROM product WHERE  product.id_product>'2' AND product.id_product<'8'";
$query_pro1 = mysqli_query($mysqli , $sql_pro1);



?>


                    <?php
                while($row_pro1 = mysqli_fetch_array($query_pro1)){
                ?>
                  <div class="itemconbephai">
                    <div class="divconphai">
                        <a href="">
                        <img src="<?=$row_pro1['picture'] ?>" alt="" class="anhconbe">
                        <span><?=$row_pro1['title'] ?></span>
                        <span><?=$row_pro1['description'] ?></span>
                        </a>
                        <div class="chutrenphai">
                            <a onclick="popupOpen()">MUA NGAY</a>
                        </div>
                        <div class="chuduoiphai">
                        <a onclick="popupOpen()" href="index.php?quanly=sanpham&id=<?php echo $row_pro1['id_product'] ?>">XEM NHANH</a>

                        </div>
                    </div>
                  
                    <h3><?php echo number_format($row_pro1['price'],0,',','.' )?>₫</h3>
                    </div>
                    
                <?php } ?>