<!DOCTYPE html>
<html lang="en-US" ng-app="employeeRecords">
    <head>
        <title>Laravel 5 AngularJS CRUD Example</title>
        <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    </head>
    <body>
        <h2>Employees Database</h2>
        <div  ng-controller="employeesController">

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Civilité</th>
                        <th>Langue</th>
                        <th>Adresse</th>
                        <th>Code postale</th>
                        <th>Ville</th>
                        <th>Tél</th>
                        <th>GSM</th>
						<th>Langue</th>
                        <th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="customer in customers">
                        <td>@{{ customer.id }}</td>
                        <td>@{{ customer.name }}</td>
                        <td>@{{ customer.civility }}</td>
                        <td>@{{ customer.email }}</td>
                        <td>@{{ customer.address }}</td>
                        <td>@{{ customer.zipcode }}</td>
                        <td>@{{ customer.city }}</td>
                        <td>@{{ customer.phone }}</td>
                        <td>@{{ customer.gsm }}</td>
                        <td>@{{ customer.language }}</td>
                        <td>
                    </tr>
                </tbody>
            </table>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/employees.js') ?>"></script>
    </body>
</html>