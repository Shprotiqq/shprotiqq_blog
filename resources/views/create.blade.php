@extends('layouts.layout')

@section('content')


<div class="container mt-5">
    <h1>New Post Creation</h1>
    <form action="{{ route('post.store') }}"  method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post content</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="content">
        </div>
{{--        <div class="form-group mb-5">--}}
{{--            <label for="exampleFormControlSelect1">Select Post tag(s)</label>--}}
{{--            <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                <option>1</option>--}}
{{--                <option>2</option>--}}
{{--                <option>3</option>--}}
{{--                <option>4</option>--}}
{{--                <option>5</option>--}}
{{--                <option>6</option>--}}
{{--                <option>7</option>--}}
{{--                <option>8</option>--}}
{{--            </select>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
