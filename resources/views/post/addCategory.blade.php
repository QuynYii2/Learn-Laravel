@extends('layout.index')
@section('content')

    <form action="{{ route('post.saveCat') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name Category</label>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name Category">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description Category</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Create Category</button>
</form>
@endsection

