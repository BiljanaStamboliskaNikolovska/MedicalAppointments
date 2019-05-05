<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Doctors card</title>
</head>

<body>
<div class="row justify-content-md-center">
    <div class="col-md-6">
    <h1 class="title rounded-pill breadcrumb" style="margin-top:30px">Doctors card</h1>

        <div>

            <h3 class="title  " style="margin-top:30px">Name: {{$doctor->name}}</h3>
            <h3 class="title  " style="margin-top:30px">Speciality: {{$doctor->speciality}}
            </h3>
            <h3 class="title  " style="margin-top:30px">Avelibility:
                {{($doctor->is_active=0) ? "Not Active" : "Active"}}</h3>
            <h3 class="title  " style="margin-top:30px">Institution: {{$doctor->institution}}
            </h3>

            @if($doctor->is_activ=1)
            <h3 class="title  " style="margin-top:30px"> Lista na pregledi
            </h3>
            @foreach($doctor->appointments as $appointment)
            <ul>
                <li class="title   ">
                    <a href="/appointment/{{$appointment->id}}/edit">
                        Patient name: {{$appointment->patient_name}},
                        appointment time from: {{$appointment->time_from}},
                        appointment time to: {{$appointment->time_to}},
            </ul>
            @endforeach

            @endif
        </div>

  




    <div style="margin-top:30px">

        <a href="/" type='button' class="btn btn-primary">Back</a>


        <a href="/{{$doctor->id}}/edit" type='button' class="btn btn-primary">Edit</a>

  </div>

    </div>
    </div>
    </div>
</body>

</html>