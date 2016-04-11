<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

  

	<table>
		<tr>
			<th>Product name</th>
			<th>Brand</th>
			<th>Internal ID</th>
			<th>MAP</th>
		</tr>
		 @foreach($products as $product)
		 	<tr>
		 		<td>{{$product->name}}</td>
		 		<td>{{$product->brand}}</td>
		 		<td>{{$product->internal_id}}</td>
		 		<td>
		 			@if(!$product->target_price)
		 				<center>{{'–'}}</center>
		 			@else
		 				{{$product->target_price}}
		 			@endif
		 		</td>
		 	</tr>
		 @endforeach
	 </table>
</body>
</html>