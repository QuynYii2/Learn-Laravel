@extends('layout.index')
@section('content')
<form action="" method="POST">
    @csrf
    <label for="">Name</label><br><br>
    <input type="text" name="name" value="{{$detail->name}}"><br><br>
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('name') }}</strong>
        </span><br><br>
    @endif
    <label for="">Description</label><br><br>
    <textarea rows="4" cols="50" name="description">{{$detail->description}}</textarea><br><br>
    <button type="submit">Update Category</button>
</form>
@endsection
