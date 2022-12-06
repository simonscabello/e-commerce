@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between">
            <h3 class="card-title">List of products</h3>

            <a class="btn btn-success" href="{{route('product.create')}}">Create new product</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->brand}}</td>
                        <td>
                            <form id="delete-form{{$product->id}}" action="{{route('product.destroy', $product->id)}}" method="POST" class="d-none">
                                @csrf
                                @method('delete')
                            </form>
                            <button onclick="deleteProduct({{$product->id}});" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

    <script>
        function deleteProduct(id) {
            event.preventDefault();
            let form = document.getElementById('delete-form' + id)
            let text = 'Are you sure you want to delete this product? You will not be able to undo this action';

            if (confirm(text) === true) {
                form.submit();
            } else {
                window.location.reload();
            }
        }
    </script>
@endsection
