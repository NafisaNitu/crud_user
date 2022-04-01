@extends('admin.master')

@section('title')
    Add User
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Add New Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="product_image" class="form-control-file">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="product_price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Gender</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="gender" checked value="1">Man</label>
                                        <label for=""><input type="radio" name="gender" value="0">Woman</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="color" class="col-md-4 col-form-label">Color</label>
                                    <div class="col-md-8">
                                        <select id="color" name="color" class="form-control">
                                            <option value="color" disabled selected> <--- Select a Color ----> </option>
                                            <option name="color" value="black">Black</option>
                                            <option name="color" value="white">White</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="color" class="col-md-4 col-form-label">Size</label>
                                    <div class="col-md-8">
                                        <select id="size" name="size" class="form-control">
                                            <option value="size" disabled selected> <--- Select a Size ----> </option>
                                            <option name="size" value="medium">Medium</option>
                                            <option name="size" value="small">Small</option>
                                            <option name="size" value="large">Large</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Add Product">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

