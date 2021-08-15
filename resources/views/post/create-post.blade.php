@extends('home')
@section('mainContent')
<div class="col=md-9">
    <h2 class="text-center">Create Post</h2>
  
    <label for="title">Post title:</label><br>
    <input type="text" name="title" id="title" class="form-control"><br>
    <label for="category">post image:</label><br>
    <input type="file" name="iamge" id="image" class="form-control"><br>
    <label for="category_id">Select category:</label><br>
    <select  id="category_id" class="form-control">
        @foreach ($categories as $category)
        <option value="{{ $category->id}}">{{ $category->name }}</option>
        @endforeach
        
    </select><br>
    <label for="category">Category Description:</label><br>
    <textarea name="description" id="description" class="form-control"  rows="2"></textarea> <br>
    <button class="btn btn-success btn-large" onclick="sendData()">save</button>

</div>
<script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/createPost.js') }}"></script>
@endsection
