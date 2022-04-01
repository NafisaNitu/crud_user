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
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Add New User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new-user') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">User Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Date of Birth</label>
                                    <div class="col-md-8">
                                        <input type="date" name="dob" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label">Country</label>
                                    <div class="col-md-8">
                                    <select id="country" name="city" class="form-control">
                                        <option value="country" disabled selected> <--- Select a City ----> </option>
                                        <optgroup name="city" label="Bangladesh">
                                            <option name="city" value="dhaka">Dhaka</option>
                                        </optgroup>
                                        <optgroup name="city" label="India">
                                            <option name="city" value="new delhi">New Delhi</option>
                                        </optgroup>
                                        <optgroup name="city" label="Canada">
                                            <option name="city" value="ottawa">Ottawa</option>
                                        </optgroup>
                                        <optgroup label="United States">
                                            <option name="city" value="washington">Washington</option>
                                        </optgroup>
                                        <optgroup label="United Kingdom">
                                            <option name="city" value="london">London</option>
                                        </optgroup>
                                        <optgroup label="Germany">
                                            <option name="city" value="berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="France">
                                            <option name="city" value="paris">Paris</option>
                                        </optgroup>
                                        <optgroup label="China">
                                            <option name="city" value="beijing">Beijing</option>
                                        </optgroup>
                                    </select>
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" checked value="1">Active</label>
                                        <label for=""><input type="radio" name="status" value="0">Inactive</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Add User">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

