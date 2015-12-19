
app.controller('employeesController', function($scope, $http, API_URL) {
    //retrieve employees listing from API
    $http.get(API_URL + "customer")
            .success(function(response) {
                alert("ok");
                $scope.customers = response;
            });
});

