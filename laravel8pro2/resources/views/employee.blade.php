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
</head>
<body>
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
    
</body>
</html>