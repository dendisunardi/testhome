<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Products</title>
	<link rel="stylesheet" href="libs/materialize/css/materialize.css" />
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
<div class="container" ng-app="myApp" ng-controller="productsCtrl">
	<div class="row">
		<div class="col s12">
			<h4>Products</h4>
			<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
				<a class="waves-effect waves-light btn modal-trigger btn-floating btn-large red" href="#modal-product-form" ng-click="showCreateForm()"><i class="large material-icons">add</i></a>
			</div>
			<div id="modal-product-form" class="modal">
				<div class="modal-content">
				<h4 id="modal-product-title">Create New Product</h4>
				<div class="row">
				<div class="input-field col s12">
					<input ng-model="name" type="text" class="validate" id="form-name" placeholder="Type name here.." />
					<label for="name">Name</label>
				</div>
					
				</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script src="libs/materialize/js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.11/angular2.dev.js"></script>

<script>

</script>
</body>
</html>