<!DOCTYPE html>
<!-----------------------------------------------------------------
-- Order_viewer page is where all the orders will be displayed. ---
-------------------------------------------------------------------
-- Author: Irene Gayle Roque --------------------------------------
------------------------------------------------------------------>
<html>
<head>
	<title>Orders</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		th,td{
			border: 1px solid #000;
			padding: 5px;
		}
	</style>
</head>
<body>
	
	<h1>Orders</h1>
	
	<!-- Displays all information about the orders in tabular form -->
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Order ID</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($results as $result): ?>
				<tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['order_id']; ?></td>
					<td><?php echo $result['product']; ?></td>
					<td><?php echo $result['price']; ?></td>
					<td><?php echo $result['qty']; ?></td>
					<td><?php echo totalPrice($result['price'], $result['qty']); ?></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>


</body>
</html>