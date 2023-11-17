@extends('welcome')
@section('content')
<style>
        body {
        background-color: rgb(1, 1, 68); /* Dark background color */
        color: #ffffff; /* Light text color */
    }
    .btn-back:hover {
        background-color: #0056b3; /* Darker color on button hover */
    }

    .jurusan {
        color: white; /* Text color for the heading */
    }

    .card {
        background-color: #1f1f1f; /* Darker card background color */
        color: #ffffff; /* Light text color for card content */
        transition: background-color 0.3s ease; /* Smooth transition on background color change */
    }

    .card:hover {
        background-color: #2c2c2c; /* Darker background color on hover */
    }

    .card-header {
        font-weight: bold;
        background-color: #343a40; /* Dark header background color */
        color: white;
        text-align: center;
    }

    img {
        height: 100px;
        width: auto;
    }
</style>
<div class="jurusan text-center mb-4">
    INFORMASI PROGRAM STUDI INFROMATIKA
</div>
<div class="row">
    <div class="col mb-3">
        <div class="card">
            <div class="card-header text-center">
                TEKNIK INFORMATIKA
            </div>       
            <div class="card-body text-center">
               <a href="" style="text-decoration: none;color: white"><a href="{{url('kampus')}}" style="text-decoration: none"> Informasi Kampus</a></a>
            </div>       
        </div>
    </div>   
    <div class="col mb-3">
        <div class="card">
            <div class="card-header text-center">
                INFORMATIKA
            </div>       
            <div class="card-body text-center">
               <a href="" style="text-decoration: none;color: white"><a href="{{url('if')}}" style="text-decoration: none"> Informasi Kampus</a></a>
            </div>       
        </div>
    </div>   
</div>
@endsection