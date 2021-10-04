
<?php
    $sql_pro1 = "SELECT * FROM category1,product WHERE product.id_cate1 =category1.id_category1 AND category1.id_category1=' $_GET[id1]'";
    $query_pro1 = mysqli_query($mysqli , $sql_pro1);


?>

<div class="itemphaibe">

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
                            <a onclick="popupOpen()">XEM NHANH</a>
                        </div>
                    </div>
                  
                   <h3><?=$row_pro1['price'] ?>₫</h3>
                    </div>
                <?php } ?>

               
</div>      