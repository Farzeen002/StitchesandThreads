<div class="">
						<table class="table table-bordered table-responsive" >
							<thead>
								<tr>
								<th>Customer Name</th>
								<th>Material Name</th>
								<th>Quantity</th>
								<th>Book Date</th>
								<th>Delivery Date</th>
								<th>Colour</th>
								<th>Height</th>
								<th>Hip</th>
								<th>Waist</th>
								<th>Kneelength</th>
								<th>Thigh</th>
								<th>Bottom</th>
								<th>comment</th>
								<th>Image</th>
								</tr>
						</thead>
					<tbody>
<?php
include('connect.php');
include 'session.php';

$i=1;
$query=mysqli_query($con,"SELECT d.*,m.m_id,m.m_type,u.full_name,u.uid from `tbl_pant` d inner join tbl_material m on m.m_id=d.m_id inner join tbl_user u on u.uid=d.uid") or die(mysqli_error($con));

while ($row=mysqli_fetch_array($query)) {?>
<tr>
	<td><?php echo $row['full_name'];?></td>
	<td><?php echo $row['m_type'];?></td>
	<td><?php echo $row['qty'];?></td>
	<td><?php echo date('d-m-Y',strtotime($row['book_date']));?></td>
	<td><?php echo date('d-m-Y',strtotime($row['delivery_date']));?></td>
		<td><?php $col=$row['colour'];?>
		<div style="background-color: <?php echo $col;?>; height: 30px; width: 30px; border: 1px solid white;"></div>
	</td>

	<td><?php echo $row['height'];?></td>
	<td><?php echo $row['hip'];?></td>
	<td><?php echo $row['waist'];?></td>
	<td><?php echo $row['kneelength'];?></td>
	<td><?php echo $row['Thigh'];?></td>
	<td><?php echo $row['bottom'];?></td>
	<td><?php echo $row['comment'];?></td>
	<td>


			 			<?php 
			 							
										$splittedstring=explode(",",$row['image']);
										foreach ($splittedstring as $key => $value) 
										{
												
										?>
										<img src="../photos/<?php echo $value ?>" width="60" height="60">			
										
										<?php
										}
			 							?>

			 			</td>
			 			
			 			
</tr>
<?php	
}
?>
</tbody>
</table>
	
</div>
</div>
</div>


