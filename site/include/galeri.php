<?php /*
  if (session_status() == PHP_SESSION_NONE) {
  session_start();
  ob_start();
  } */
?>
<!DOCTYPE html>
<html>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <body>
    <div class="genel">  <!-- style="width:700px;margin:auto;"> --> 
        <div class="body">
            <div role="main" class="main">
                <div class="container">
                    <ul class="nav nav-pills sort-source" data-sort-id="portfolio" 
                        data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    </ul>
                    <div class="row">
                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                                <?php
                                require("ayar.php");
                                $query = $db->query("SELECT DISTINCT *
                                        FROM product
                                        INNER JOIN productphoto
                                        ON product.id = productphoto.productID group by productphoto.productID 
                                        order by product.id desc limit 6");
                                foreach ($query as $row) {
                                    $id = $row["id"];
                                    $urunadi = str_replace("-", " ", $row["productName"]);
                                    //$_SESSION['urun']=$urunadi;
                                    //$_SESSION['urun']=$row['urunadi'];  
                                    ?>
                                    <li class="col-md-4 isotope-item <?php echo $row["productName"]; ?>">
                                        <div class="portfolio-item">
                                            <a href=<?php echo "index.php?sayfa=urundetay&" . $row["productName"] ?> >
                                                <span class="thumb-info thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <?php
                                                        echo '<img src="' . $row["productPhotoUrl"] . '" class="img-responsive" >';
                                                        ?>
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner"><?php echo $urunadi; ?></span>
                                                            <span class="thumb-info-type"><?php echo $urunadi; ?></span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="menu" id="menu_<?php echo $id; ?>"> 
                            <button><span class="show_more" id="<?php echo $id; ?>">Daha Fazla Göster</span>
                                <span class="loading" style="display:none;">Yukleniyor</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="custom.js"></script>
</body>
</html>
