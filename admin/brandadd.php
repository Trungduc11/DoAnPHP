<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php
     $brand = new brand(); // tên class trong file
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $brandName = $_POST['brandName'];
        $insertBrand = $brand->insert_brand($brandName);
    } 
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Them Thuong hieu</h2>
              
               <div class="block copyblock">
                  <?php
                if(isset($insertBrand)){
                    echo $insertBrand;
                }
                ?>
                 <form action="brandadd.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="brandName" placeholder="Enter Brand Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>