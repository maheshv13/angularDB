<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>	
</head>
 
<body>
	
    <div id="div1">
    	
    </div>

    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
            	<p>
                    <a href="#" class="btn btn-success">Create</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Mobile Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody ng-app="myApp" ng-controller="myCtrl">
                  	<tr ng-repeat="list in records">
                    	<td>{{list.name}}</td>
                        <td>{{list.email}}</td>
                        <td>{{list.mobile}}</td>
                        <td>
                        	<a class="btn btn-primary" href="#">Edit</a>
                            <a class="btn btn-danger" href="#" ng-click="removeRecord($index)">Delete</a>
                        </td>
                    </tr>
                  </tbody>
             </table>
        </div>
    </div> <!-- /container -->
    <script type="text/javascript">
    	var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope, $http){
			$http.get('http://localhost/crud/list.php')
			.then(function(response){
				$scope.records = response.data;
				console.log($scope.records);
			});	
		});
	</script>
  </body>
</html>