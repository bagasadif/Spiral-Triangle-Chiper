@extends('app')

@section('title', 'Home')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container text-center">
    <h1>Cipher Calculator</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6 text0c">
                <div class="col-md-12">
                    <br>
                    <br>
                    <h3>Triangle Cipher</h3>
                    <br>
                    <a type="button" href="{{route('triangle.encryption')}}" class="btn btn-secondary btn-rounded">Encryption</a>
                    <span style="margin-right: 20px;"></span>
                    <a type="button" href="{{route('triangle.decryption')}}"class="btn btn-info btn-rounded">Decryption</a>
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <div class="col-md-12">
                    <h3>Spiral Cipher</h3>
                    <br>
                    <a type="button" href="{{route('spiral.encryption')}}" class="btn btn-secondary btn-rounded">Encryption</a>
                    <span style="margin-right: 20px;"></span>
                    <a type="button" href="{{route('spiral.decryption')}}"class="btn btn-info btn-rounded">Decryption</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
@stop