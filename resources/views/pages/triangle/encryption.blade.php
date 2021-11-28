@extends('app')

@section('title', 'Triangle - Encryption')

@section('content')

<br>


<div class="container">
    <h2 class="text-center">Triangle Cipher Encryption</h2>

    <form method="post" action="{{route('triangle.encrypt')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="plaintext"><h5>Plaintext</h5></label>
            <input type="text" class="form-control" id="plaintext" required name="plaintext" rows="3" @isset ($plaintext) value="{{$plaintext}}" @endisset></input>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <br>
    @isset ($arrays)
    <h5>The Triangle:</h5>
    <div class="text-center">
        @foreach ($arrays as $array)
        <p>
            @foreach ($array as $char )
            {{$char}} <span style="margin: 10px;">  </span>
            @endforeach
        </p>
        @endforeach
    </div>
    <h5>Encryption Result:</h5>
    <strong>{{$ciphertext}}</strong>
    @endisset

</div>
<br>
@stop