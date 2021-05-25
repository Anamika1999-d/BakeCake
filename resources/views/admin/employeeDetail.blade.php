@extends('layout.admin')

@section('body')
<head>
    <link rel="stylesheet" href="css/employeedetail.css">
</head>
<body> 
<div class="detail-page">
    <div class="headline">
        <h4>Home <i class="fas fa-angle-right"></i> Employee Details</h4>
    </div>
    <div class="emp-list">
        <div class="searchsection">
            <form action="" method="get">
                <input type="text">
                <button type="submit" class="btn btn-success search-btn">Search</button>
                <a href="/add-employee" class="btn btn-primary add-emp">Add Employee</a>
            </form>
        </div>
        <div class="list-table">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Sno</th>
                      <th scope="col">Employee Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Role</th>
                      <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <th>1</th>
                      <td>Amit</td>
                      <td>Amit@gmail.com</td>
                      <td>baker</td>
                      <td><a href="" class="btn btn-success view-detail">View Detail</a></td>
                    </tr>
                    <tr>
                      <th>1</th>
                      <td>Amit</td>
                      <td>Amit@gmail.com</td>
                      <td>baker</td>
                      <td><a href="" class="btn btn-success view-detail">View Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
@endsection