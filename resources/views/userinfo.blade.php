@extends('master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Acount Information</div>

                <div class="panel-body">
                    
                    Your name: {{ $N}}
                    <br>   
                    Your Email: {{ $E}}
                    <br> 
                    Your Password: {{ $message }}
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection