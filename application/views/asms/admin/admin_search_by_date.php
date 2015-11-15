<html>
<head>
<title>Search By Date</title>
</head>
<body>

	<form name="search_by_date" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/search_by_date_report">
		<table  class="table table-striped">
			<tr><th colspan="100" style="text-align:center">Search By Date Reports</th></tr>
			<tr class="active"><td> Retailers </td>
				<td><select name="shop_name">
					<option value="arihant">Arihant</option>
					<option value="abc">Shivani Enterprise </option>
				</select>
			</td></tr>
			<tr><td>From:</td><td><input type="date" name="from"><br/></td></tr>
			<tr class="active"><td>To:</td><td><input type="date" name="to"><br/></td></tr>
			<tr class="active" align="center"><td colspan="100"><input type="submit" class="btn btn-success" name="Submit"></td></tr>
		</table>
	</form>
	

	<table border="1" class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Retailer Name</td>
			<td>Products</td>
			<td>Total</td>
			<td>Purchase Date</td>
		</tr>
		<?php foreach($products as $searchs): ?>
			<tr class="active">
				<td><?php echo $searchs->tid;?></td>
				<td><?php echo $searchs->rname;?></td>
				<td><?php echo $searchs->products;?></td>
				<td><?php echo $searchs->total;?></td>
				<td><?php echo $searchs->purchase_date;?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>