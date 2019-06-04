<?php 
session_start();
  if(!isset($_SESSION['login_user'])){
      //echo "fdafdafd";
    header('Location:index.php');
  }else{
      include '../database.php'; 
      include 'layout-top.php' ;$data = mysqli_query($conn,"SELECT * FROM products");
?>
<script type="text/javascript">
  var products = [];
</script>
<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
</head>
<body>
 <div class='container-fluid' style="margin:0rem 1">
   <div class="row">
   <div class="col" style='text-align:center;background-color:#d6d6d6;color:#000;margin-top:1rem;letter-spacing:1px;font-family:roboto;padding:2px'> 
        <a href="logout.php" class="btn" style="float:right;margin-top:10px;margin-right:1rem;background-color:white;color:#333;letter-spacing:1px;">Logout</a>
       <h3>Products table</h3>
     </div>
  </div>
</div>
     <table class="table table-hover table-bordered" style="margin:2rem 0;table-layout:fixed;overflow-wrap:break-word;"">
      <thead style="letter-spacing:1px;background-color:#daeaef!important;color:#333!important">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Normal Offer(1)</th>
          <th scope="col">Special Offer(2)</th>
          <th scope="col">Normal Images Offer(1)</th>
          <th scope="col">Special Images Offer (2)</th>
          <th scope="col">Regular Text</th>
          <th scope="col">Site URL</th>
          <th scope="col">Tracking Link</th>
          <th scope="col">Swap URL</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $counter = 0;
        $last = (mysqli_num_rows($data) -1);
       //print_r($last);exit;
        while ($row = mysqli_fetch_array($data,MYSQLI_BOTH)){
          ?>

          <script type=text/javascript>
            var product = {};
            product.id = '<?php echo $row['id']; ?>';
            product.order = '<?php echo $counter; ?>';
            product.offer = '<?php echo $row['offer'] =str_replace("'","\'",$row['offer']);?>';
            product.offer1 = '<?php echo $row['offer1'] =str_replace("'","\'",$row['offer1']);?>';
            product.images = '<?php echo $row['images']; ?>';
            product.images1 = '<?php echo $row['images1']; ?>';
            product.regulartext = '<?php echo $row['regulartext']; ?>';
            product.URL = '<?php echo $row['url_1']; ?>';
            product.tracking_link = '<?php echo $row['tracking_link']; ?>';
            products.push(product);
          </script>            
          <tr id="<?php echo $counter; ?>" class="cls_<?php echo $row['id']; ?>">
            <td scope="row"><?php echo $row['id'] ?></td>
            <td class="offer"><?php echo $row['offer']; ?></td>
            <td class="offer1"><?php echo $row['offer1']; ?></td>
            <td class="images">
              <?php
              if($row['images'] != "")
              {
               ?>
               <img src="<?php echo $row['images'];?>" width="100px">
               <a href="javascript:void(0);" class="removePic"></i></a>
               <?php     
             }
             else if($row['images'] == "" || $row['images'] == NULL)
             {
              ?>
              <img src="../images/default-product-img.jpg" width="100px">
              <?php    
            }
            ?>                        
          </td>

          <td class="images1">
              <?php
              if($row['images1'] != "")
              {
               ?>
               <img src="<?php echo $row['images1'];?>" alt="no image" width="100px">
               <a href="javascript:void(0);" class="remove_pic"></i></a>
               <?php     
             }
             else if($row['images1'] == "" || $row['images1'] == NULL)
             {
              ?>
              <img src="../images/default-product-img.jpg" width="100px">
              <?php    
            }
            ?>                        
          </td>
          <td class="regulartext"><?php echo $row['regulartext']; ?></td>

          <td class="URL">
            <a target='_blank' href="<?php echo $row['url_1'] ?>"><?php echo $row['url_1'] ?></a>
          </td> 
          <td class="tracking_link">
            <a target='_blank' href="<?php echo $row['tracking_link'] ?>"><?php echo $row['tracking_link'] ?></a>
          </td>
          <td>
            <?php
            if($counter == 0)
            {
              ?>
              <a target='_blank' class="swap" title="DOWN" href="javascript:void(0);"><i
                class="fa fa-arrow-down" style="margin:1rem 1rem; font-size:30px;"></i></a>
                <?php
              }
              elseif($counter == $last)
              {
                ?>
                <a target='_blank' class="swap" title="UP" href="javascript:void(0);"><i
                  class="fa fa-arrow-up" style="margin:1rem 1rem; font-size:30px;"></i></a>
                  <?php
                }
                else
                {
                  ?>
                  <a target='_blank' class="swap" title="UP" href="javascript:void(0);"><i
                    class="fa fa-arrow-up" style="margin:1rem 1rem; font-size:30px;"></i></a>
                    <a target='_blank' class="swap" title="DOWN" href="javascript:void(0);"><i
                      class="fa fa-arrow-down" style="margin:1rem 1rem; font-size:30px;"></i></a>
                      <?php
                    }
                    ?>

                  </td>

                  <td>
                    <a href="update_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm"
                      id="update_products" style="letter-spacing:1px;font-family:roboto">Update</a></br>
                      <!--<a href="add_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm add_delet_edi" style="letter-spacing:1px;font-family:roboto;margin-top:10px;">Add</a></br>
                      <a href="delete_products.php?eid=<?php echo $row['id']; ?>" 
            < class="btn btn-primary btn-sm add_delet_edi" onclick="return(confirm('Are You Sure You Want to Delete?'));" style="letter-spacing:1px;font-family:roboto;margin-top:10px;">Delete</a>--></br>
                     </td>

                   </tr>

                   <?php  
                   $counter++;
                 }
                 ?>
               </tbody>
             </table>
           </div>
         </div>
       </body>
       </html>
       <?php 
       include 'layout-bottom.php'; }
       ?>