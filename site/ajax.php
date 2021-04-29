<html>
    <body>
    <div class="body">
        <div role="main" class="main">
            <div class="container">
                <div class="row">

                    <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                        <?php
                        sleep(1);
                        require("ayar.php");
                        if (!empty($_POST["id"])) {
                            $id = $_POST["id"];
                            $query = $db->query("select count(*) as say from product where id < " . $id . " order by id desc");
                            $row = $query->fetch();
                            $toplam = $row["say"];
                            $limit = 3;
                            $query = $db->query("SELECT DISTINCT * FROM product INNER JOIN productphoto
                            ON product.id = productphoto.productID where product.id< " . $id . " group by productphoto.productID 
                            order by product.id desc limit " . $limit);
                            foreach ($query as $row) {
                                $id = $row["id"];
                                $urunadi = str_replace("-", " ", $row["productName"]);
                                ?>
                                <li class="col-md-4 isotope-item <?php echo $row["productName"]; ?>">
                                    <div class="portfolio-item">
                                        <a href=<?php echo "index.php?sayfa=urundetay&" . $row["productName"] ?> >
                                            <span class="thumb-info thumb-info-lighten">
                                                <span class="thumb-info-wrapper">
                                                    <?php
                                                    echo '<img src="' . $row["productPhotoUrl"] . '" class="img-responsive" height="350px">'
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

                                <?php
                            }
                            if ($toplam > $limit) {
                                ?>
                                <div class="menu" id="menu_<?php echo $id; ?>"> 
                                    <button><span class="show_more" id="<?php echo $id; ?>">Daha Fazla Göster</span>
                                        <span class="loading" style="display:none;">Yukleniyor</span></button>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>      
    </div>          
</body>     
</html>



