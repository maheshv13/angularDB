var app = angular.module("myApp", ["ngRoute", "testModule"]);
app.controller("myCtrl", function($scope, $http) {
	//$http.get("http://localhost/crud/list.php")
	//.then(function(response){
		//$scope.records = response.data;
		//console.log($scope.records);
	//});
	// https://www.youtube.com/watch?v=SOZi9CooV_E
	// https://www.youtube.com/watch?v=iaTzRmSCJ6w
	getInfo();
	function getInfo(){
		$http.post('databasefiles/list.php').success(function(data){
			$scope.details = data;
			console.log("get: " + $scope.details);
		});
	}
	
	$scope.insertInfo = function(info){
		alert("Insert Info");
		$http.post('databasefiles/create.php', {
			"id":info.id,
			"name":info.name,
			"email":info.email,
			"gender":info.gender
		}).success(function(data){
			if(data == true) {
				getInfo();	
				console.log("ddfdsf");
			}
		})
	}
	
});

var app1 = angular.module('testModule',[]);
app1.controller('myCtrl1', function($scope){
	$scope.ngTitle = "This comes from test module";
})

