// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController", function($scope,$http){
getInfo();
function getInfo() {
	$http.get('databasefiles/empDetails.php').then(function(response){
		$scope.details = response.data;
		console.log($scope.details);
	})
}
$scope.insertInfo = function(info){
$http.post('databaseFiles/insertDetails.php',{"name":info.name,"email":info.email,"address":info.address,"gender":info.gender}).success(function(data){
if (data == true) {
getInfo();
// Hide details insertion form
//$('#empForm').css('display', 'none');
}
});
}		
});