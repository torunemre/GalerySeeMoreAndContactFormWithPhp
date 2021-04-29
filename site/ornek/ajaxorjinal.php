<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<body>
<div class="genel">  <!-- style="width:700px;margin:auto;"> --> 
    <div class="body">

        <div role="main" class="main">

            <div class="container">
                <?php
                sleep(1);
                require("ayar.php");
                if (!empty($_POST["id"])) {
                    $id = $_POST["id"];
                    $query = $db->query("select count(*) as say from urunler where id < " . $id . " order by id desc");
                    $row = $query->fetch();
                    $toplam = $row["say"];
                    ?>
                    <div class="row">

                        <ul class="portfolio-list sort-destination" data-sort-id="portfolio" >
                            <?php
                            $limit = 3;
                            $query = $db->query("select * from urunler where id < " . $id . " order by id desc limit $limit");

                            foreach ($query as $row) {
                                $id = $row["id"];
                                
                                
                                ?>
                                <li class="col-md-4 isotope-item <?php echo $row["urunadi"]; ?>">
                                    <div class="portfolio-item">
                                        <a href="portfolio-single-small-slider.html">
                                            <span class="thumb-info thumb-info-lighten">
                                                <span class="thumb-info-wrapper">
                                                    <?php
                                                    echo '<img src="img/koltuk/' . $row["urunadi"] . '.jpg" class="img-responsive" height="350px">'
                                                    ?>
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner"><?php echo $row["urunadi"]; ?></span>
                                                        <span class="thumb-info-type"><?php echo $row["urunadi"]; ?></span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                                    </span>
                                                    <?php
                                                    echo "$id";
                                                    ?>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <?php
                            }

                            if ($toplam > $limit) {
                                ?>
                            </ul>
                        </div>
                        <div class="menu" id="menu_<?php echo $id; ?>"> 
                            <span class="show_more" id="<?php echo $id; ?>">Daha fazlasını goster</span>
                            <span class="loading" style="display:none;">Yukleniyor...</span>
                        </div>

                        <?php
                    } else {
                        echo '<span class="bitti">daha fazla konu bulunmuyor</span>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>