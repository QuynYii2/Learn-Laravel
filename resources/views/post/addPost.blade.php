@extends('layout.index')
@section('content')

    <form action="{{ route('post.saveCat') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name Post</label>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                   placeholder="Name Category">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="cat">
                @foreach($cat as $items)
                    <option value="{{$items->id}}">{{$items->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
                @foreach($status as $key => $items)
                    <option value="{{$key}}">{{$items}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Create Post</button>
    </form>
@endsection

