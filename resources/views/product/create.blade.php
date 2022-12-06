@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create a new product</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group col-lg-4">
                        <label for="file">Photo*</label>
                        <input type="file" class="form-control" id="file" name="file" value="{{old('file')}}">
                        @error('file')
                        <div class="text-danger">
                            <small>{{$message}}</small>
                        </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group col-lg-4">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger">
                            <small>{{$message}}</small>
                        </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group col-lg-4">
                        <label for="description">Description*</label>
                        <textarea rows="4" type="text" class="form-control" id="description" name="description">{{old('description')}}</textarea>
                        @error('description')
                        <div class="text-danger">
                            <small>{{$message}}</small>
                        </div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group col-lg-4">
                        <label for="repository_link">Brand</label>
                        <input type="text" class="form-control" id="repository_link" name="brand" value="{{old('brand')}}">
                        @error('brand')
                        <div class="text-danger">
                            <small>{{$message}}</small>
                        </div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group col-lg-4">
                        <label for="color">Price*</label>
                        <input name="price" id="price" type="number" value="{{old('price')}}" class="form-control">
                        @error('price')
                        <div class="text-danger">
                            <small>{{$message}}</small>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer col-lg-4" style="background-color: #fff">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
