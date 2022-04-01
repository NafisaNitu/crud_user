@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Manage Blogs</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Gender</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>
                                            <img src="{{ asset($product->product_image) }}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>{{ $product->gender == 1 ? 'man' : 'woman' }}</td>
                                        <td>{{ $product->color }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>
                                            <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-sm">edit</a>
                                            <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-danger btn-sm">delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>{{----}}
                </div>
            </div>
        </div>
    </section>
@endsection
