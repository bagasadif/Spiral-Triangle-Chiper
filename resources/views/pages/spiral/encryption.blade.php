@extends('app')

@section('title', 'Spiral - Encryption')

@section('content')

<br>

<div class="container text-break">
    <h2 class="text-center">Spiral Cipher Encryption</h2>
    <br>
    <form name="myForm" method="post" action="{{route('spiral.encrypt')}}" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="row" class="col-sm-2 col-form-label">
                <b>
                    <h5>Row Size</h5>
                </b>
            </label>
            <div class="col-sm-4">
                <input type="number" name="row" class="form-control" id="row" min="2" max="15" required @isset ($row) value="{{$row}}" @endisset>
            </div>
            <label for="column" class="col-sm-2 col-form-label">
                <b>
                    <h5>Column Size</h5>
                </b>
            </label>
            <div class="col-sm-4">
                <input type="number" name="column" class="form-control" id="column" min="2" max="15" required @isset ($column) value="{{$column}}" @endisset>
            </div>
        </div>
        <div class="form-group">
            <label for="plaintext">
                <h5>Plaintext</h5>
            </label>
            <input type="text" class="form-control" id="plaintext" required name="plaintext" rows="3" @isset ($plaintext) value="{{$plaintext}}" @endisset></input>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <br>
    @isset ($arrays)
    <h5>Visualization:</h5>
    <div class="text-center">
        <table class="table table-bordered">
            <tbody>
                @foreach ($arrays as $array)
                <tr>
                    @foreach ($array as $char )
                    <td>{{$char}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h5>Encryption Result:</h5>
        <strong>{{$ciphertext}}</strong>
    @endisset

</div>
<br>

<script>
    function validateForm() {
        let row = document.forms["myForm"]["row"].value;
        let column = document.forms["myForm"]["column"].value;
        let y = document.forms["myForm"]["plaintext"].value;
        if (y.length > row * column) {
            alert("Plaintext length cannot be greater than (Row Size times Column Size)");
            return false;
        }
    }
</script>
@stop