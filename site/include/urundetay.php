<html>
    <body>
        <?php
//printf($url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
        $metin = $_SERVER['REQUEST_URI'];
        $parcala = explode('&', $metin);
        $urunadi = str_replace("-", " ", $parcala[1]);
        $conn = new mysqli('localhost', 'root', '', 'emredb');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query("SELECT DISTINCT * FROM product 
                                    INNER JOIN productphoto
                                    ON product.id = productphoto.productID 
                                    where product.productName='" . $parcala[1] . "'limit 3");
        foreach ($result as $row) {
            ?>

        <div role = "main" class = "main shop">
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                        <hr class = "tall">
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-6">
                        <div class = "owl-carousel owl-theme" data-plugin-options = "{'items': 1}">
                            <div>
                                <div >
                                    <?php
                                    echo '<img src="' . $row["productPhotoUrl"] . '" class="img-responsive img-rounded" >';
                                    ?>
                                </div>
                            </div>
                            <div>
                                <div class="tikla">
                                    <?php
                                    echo '<img src="' . $row["productPhotoUrl"] . '" class="img-responsive img-rounded" >';
                                    ?>
                                </div>
                            </div>
                            <div>
                                <div >
                                    <?php
                                    echo '<img src="' . $row["productPhotoUrl"] . '" class="img-responsive img-rounded" >';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6">
                        <div class = "summary entry-summary">
                            <h1 class = "mb-none"><strong><?php $urunadi ?></strong></h1>
                            <p class = "price">
                                <span class = "amount"><?php echo $row["productName"]; ?></span>
                            </p>
                            <p class = "taller"><?php echo $row["productDescription"]; ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class = "col-md-6">
                        <p>
                        <h1></h1>
                        <?php echo $row["productDescription"]; ?>
                        </p>
                    </div>
                    <div class = "col-md-6">
                        <!-- start flexslider -->
                        <video style="width: 100%" controls>
                            <source src="video/Lazzoni tanıtım.mp4" type="video/mp4">

                        </video>
                        <!-- end flexslider -->
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <script type="text/javascript" src="custom.js"></script>
</body>
</html>
