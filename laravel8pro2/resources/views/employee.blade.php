<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <style>
        #emp{
            font-family:Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width = 100%;
        }
        #emp td, #emp th{
            border: 1px, solid, #ddd;
            padding: 8px;
        }
        #emp tr:nth-child(even){
            background-color: #0bfdf0;
        }
        #emp th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
        }
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<!--section style='padding-top:10px;'>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    All Employees Info.
                </div>
                <div class="card-body">
                    <table id="emp" class="table table-striped table-hover table-bordered table-responsive"-->
                    <table id="emp">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Salary</th>
                                <th>Department</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->salary}}</td>
                                <td>{{$employee->dept}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!--/div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>