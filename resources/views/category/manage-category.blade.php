@extends('home')
@section('mainContent')
<div class="card">
    <div class="card-head">
    <h2 class="text-center pt-4">Category List</h2>
    </div>
    <div class="card-body">
    <button class="btn btn-primary"> <a href="{{ url('category/createForm') }}" style="color: #fff;">Create category</a></button><br> <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{url('category/updateForm', $category->id) }}"><i class="fas fa-edit"></i></a>
                    <button onclick="deleteCategory({{ $category->id  }})"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
<script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/deleteCategory.js') }}"></script>
@endsection

