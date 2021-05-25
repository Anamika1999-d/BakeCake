@extends('layout.admin')

@section('body')
<head>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="add-form">
        <div class="headline">
            <a href="/EmployeeDetail">back</a>
            <h4>Home <i class="fas fa-angle-right"></i> Employee Details <i class="fas fa-angle-right"></i> Add Employee Detail</h4>    
        </div>
        <div class="form-page">
            <fieldset>
                <form action="">
                    <legend>Employee Detail</legend>
                    <label>Name *:</label><input type="text">
                    <label>Father's Name *:</label><input type="text">
                    <label>Mother's Name *:</label><input type="text">
                    <label>Mobile No *:</label><input type="text">
                    <label>Email *:</label><input type="text">
                    <label>Address *:</label><input type="text">
                    <label>City *:</label><input type="text">
                    <label>State *:</label><input type="text">
                    <label>Pin No *:</label><input type="text">
                    <label>Role *:</label><input type="text">
                    <label>Pay *:</label><input type="text">
                </form>
            </fieldset>
        </div>

    </div>
</body>
@endsection