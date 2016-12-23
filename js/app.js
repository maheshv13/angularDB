var app = angular.module("myApp", ["ngRoute"]);
app.controller("myCtrl", function($scope, $http) {
	$http.get("http://localhost/crud/list.php")
	.then(function(response){
		$scope.records = response.data;
		console.log($scope.records);
	})
});

