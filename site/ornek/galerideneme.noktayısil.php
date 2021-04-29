<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
include_once ("urunler.php");
?>
<div class="genel">
    <?php 
    $con=mysqli_connect('localhost','root','','emredb');
    $data= mysqli_query($con, "select * from urunler limit 3");
    ?>
    <table id="table_data">
        <tr>
            <th>id</th>
            <th>ürün ismi</th>
            <th>fotograf</th>
        </tr>
        <?php while ($row= mysqli_fetch_assoc($data)){?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["urunadi"]; ?></td>
            <td><?php 


            ?></td>
        </tr>
        <?php 
        $id=$row['id'];
        }
        ?>
            <tr id="remove_row">
                <td><button id="dahafazla" data="<?php echo $id; ?>">Daha Fazla</button></td>
            </tr>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function(e){
        $(document).on('click','#dahafazla',function(){  
            
            var id=$(this).attr('data');
            alert(id);
            $.ajax({
                url:"ajax.php",
                data:id,
                type:"post",
                success:function(){
                    $(".genel").append(e);
                }
            });
        });
    });


</script>