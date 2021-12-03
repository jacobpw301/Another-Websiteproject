function theregister($scope, $http) {
	$http.get('data/register.json')
	.success(function(data) { $scope.myregister = data.myregister;})
	.error(function(data){ console.log('error');});
}

