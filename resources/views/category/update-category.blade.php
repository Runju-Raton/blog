@extends('home')
@section('mainContent')
<div class="categoryForm">
    <label for="category">Update category name:</label><br>
    <input type="text" name="category" id="category" class="form-control"><br>
    <button class="btn btn-success form-control" onclick="updateData({{ $category->id }})">save</button>
</div>
<script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/updateCategory.js') }}"></script>
@endsection
