@extends('home')
@section('mainContent')
<div class="col=md-9">
    <h2 class="text-center">Create Post</h2>
    <form action="">
    <label for="category">Post title:</label><br>
    <input type="text" name="category" id="category" class="form-control"><br>
    <label for="category">post image:</label><br>
    <input type="file" name="iamge" id="image" class="form-control"><br>
    <label for="category">Category Description:</label><br>
    <textarea name="description" id="description" class="form-control"  rows="2"></textarea> <br>
    <button class="btn btn-success btn-large" onclick="sendData()">save</button>
</form>
</div>
<script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/createCategory.js') }}"></script>
@endsection
