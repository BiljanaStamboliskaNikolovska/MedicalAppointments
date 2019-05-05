<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Appointment create</title>
</head>

<body>
    <div class="col-md-6">
        <h1 class="col-md-6" style="margin-top:30px">Make an appointment</h1>
        <form class=" col-md-6" method="post" action="/appointment/store">
            @csrf
            <div class="form-group ">
                <label for="exampleFormControlSelect1">Choose a doctor</label>
                <select class="form-control" id="exampleFormControlSelect1" name="doctor_id">
                    @foreach ($doctors as $doctor)
                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Patient`s name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name"
                    name="patient_name" value="{{old('name')}}">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="checkbox" class="pr-3">Has occured:</label>
                    <div class="input-group-text">
                        <input type="checkbox" name="has_occured">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Date from</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="time_from">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Date to</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="time_to">
            </div>

            @include('doctors.errors')

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</body>

</html>