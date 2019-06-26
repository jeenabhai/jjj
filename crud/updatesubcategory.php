<?php 
	require_once("config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>

<body>
     <?php 
        extract($_REQUEST);
        $sql = "select * from subcategory where id='$id'";
        $result = mysqli_query($link,$sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($result);
    ?>
     <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    		<form method="post" action="action/updatesubcategory.php" enctype="multipart/form-data">
                    			<div class="form-group">
                    				<label for="sltcategoryid">Select Category</label>
                    				<select name="sltcategoryid" id="sltcategoryid" class="form-control"  required >
                    					<option value="">Select</option>
                    				<?php 
										$sql = "select id,title from category order by title";
										$result = mysqli_query($link,$sql) or die(mysqli_error($link));
										while($row = mysqli_fetch_assoc($result))
										{
											echo "<option value={$row['id']}>{$row['title']}</option>";
										}
									?>
									</select>
                    			</div>
                    			
                    			<div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                    <input type="hidden" name="oldfileUplode" value="<?php echo $row['fileUplode']; ?>" />
                    				<label for="txtitle">Title</label>
                    				<input type="text" name="txtitle" id="txtitle" class="form-control" placeholder="Title" required value="<?php echo $row['txtitle']; ?>" />
                    			</div>
                    			
                    			<div class="form-group">
                    				<label for="fileUplode">Product</label>
                    				<input type="file" name="fileUplode" id="fileUplode" class="form-control" value="<?php echo $row['fileUplode']; ?>" />
                    			</div>
                    			
                        			<div class="form-group">
                        				<input type="submit" name="btnsubmit" value="Update" class="btn btn-primary" />
                        			</div>
                    		</form>
                        
                
                 </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
</body>

</html>
