@extends('layout.index')
@section('content')
    <div class="row"  style="padding: 30px 0px;">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $key => $item)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{route('post.updateCat',['id'=>$item->id])}}" style="padding-right: 10px;">
                                Edit
                            </a>
                            <a href="{{route('post.deleteCat',['id'=>$item->id])}}"  style="padding-right: 10px;">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
