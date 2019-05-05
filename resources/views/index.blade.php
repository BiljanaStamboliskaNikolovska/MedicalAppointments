@extends('layout')

@section('title', 'Medical Appointment')

@section('content')

<h2 class="title col-md-6 rounded-pill" style="margin:30px 0px 20px 0px"> List of active doctors</h2>

<div>
    @if($doctor->is_active=1)

    @foreach ($doctor as $doctors)
    <ul>

        <li class="title col-md-4 rounded-pill bg-light">
            <a href="/doctors/{{$doctors->id}}/show">
                Lekar :
                Dr. {{$doctors-> name }} -
                {{$doctors-> speciality }} -
                {{$doctors-> institution }}

            </a>
        </li>

    </ul>
    @endforeach

    @endif
</div>

@endsection