@extends('app')

@section('title', 'Triangle - Decryption')

@section('content')

<br>


<div class="container text-break">
    <h2 class="text-center">Triangle Cipher Decryption</h2>

    <form method="post" action="{{route('triangle.decrypt')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="ciphertext"><h5>Ciphertext</h5></label>
            <input type="text" class="form-control" id="ciphertext" minlength="2" required name="ciphertext" rows="3" @isset ($ciphertext) value="{{$ciphertext}}" @endisset></input>
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
    <h5>Decryption Result:</h5>
    <strong>{{$plaintext}}</strong>
    @endisset

</div>
<br>
@stop