<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>create</title>
</head>

<body>
    <h1 class="col-md-6" style="margin-top:30px">Enter Doctor</h1>
    <form class=" col-md-6" method="post" action="/store">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name"
                value="{{old('name')}}" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Speciallity</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input"
                name="speciality" value="{{old('speciality')}}" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Select if the doctor is active</label>
            <select class="form-control" id="exampleFormControlSelect1" name="is_active" required>
                <option value="1">Active</option>
                <option value="0">Not active</option>
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Institution</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Institution"
                name="institution" value="{{old('institution')}}" required>
        </div>

        @include('doctors.errors')

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


</body>

</html>