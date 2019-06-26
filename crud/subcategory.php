<?php 
	require_once("config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>

<body>
     <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    		<form method="post" action="action/subcategory.php" enctype="multipart/form-data">
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

                    				<label for="txtitle">Title</label>
                    				<input type="text" name="txtitle" id="txtitle" class="form-control" placeholder="Title" required value="<?php echo $row['txtitle']; ?>" />
                    			</div>
                    			
                    			<div class="form-group">
                    				<label for="fileUplode">Product</label>
                    				<input type="file" name="fileUplode" id="fileUplode" class="form-control" value="<?php echo $row['fileUplode']; ?>" />
                    			</div>
                    			
                        			<div class="form-group">
                        				<input type="submit" name="btnsubmit" value="AddSub Category" class="btn btn-primary" />
                        			</div>
                                 <p class="text-center"><a href="addcategory.php" >New CAtegory Add</a></p>

                    		</form>

                            <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Existing Categories</h4> <hr/>
                                        <table id="myTable" width="100%" class="table table-bordered table-striped" border="2">
                                            <thead>
                                                <tr>
                                                <th>Sr no</th>
                                                <th>Title</th>
                                                <th>File</th>
                                                <th colspan="2">Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $sql = "select * from subcategory order by id desc";
                                                $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                                                $count=1;
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                            ?>
                                                <tr>
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['fileUplode']; ?></td>
                                                   <td>
                                                    <a href="updatesubcategory.php?id=<?php echo $row['id']; ?>" class="edit_btn">Ediit
                                                    
                                                    </a>
                                                   </td>
                                                   <td>
                                                    <a href="deletesubcategory.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                                                </tr>
                                                <?php 
                                                } /* end of while */
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        
                
                 </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
</body>

</html>
