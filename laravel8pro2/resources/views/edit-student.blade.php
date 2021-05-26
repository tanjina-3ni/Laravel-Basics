<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <section style="paddint-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offser-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit student
                    </div>
                    <div class="card-body">
                        @if(Session::has('student_updated'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('student_updated')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route('student.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$student->id}}"/>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$student->name}}" class="form-control"/>
                            </div>
                            <div class=form-group>
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{$student->email}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" value="{{$student->phone}}" class="form-control"/>
                            </div>
                            <div class="form-control">
                                <label for="file">Profile Image</label>
                                <input type="file" name="file" class="form-control" onchange="previewfile(this)>
                                <img id="previewimg" alt="profile image" src="{{asset('images')}}/{{$student->propic}}" style="max-width:130px;margin-top:20px;"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        function previewfile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function()
                {
                    $('#previewimg').altr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>