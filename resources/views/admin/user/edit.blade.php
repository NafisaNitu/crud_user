@extends('admin.master')

@section('title')
    Edit user
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update-user') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}" />

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">User Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" value="{{ $user->password }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Date of Birth</label>
                                    <div class="col-md-8">
                                        <input type="date" name="dob" class="form-control" value="{{ $user->dob }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label">Country</label>
                                    <div class="col-md-8">
                                        <select id="country" name="city" class="form-control">
                                            <option value="country">{{ $user->city }}</option>
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
                                        <label for=""><input type="radio" name="status" {{ $user->status == 1 ? 'checked' : '' }} value="1">Active</label>
                                        <label for=""><input type="radio" name="status" {{ $user->status == 0 ? 'checked' : '' }} value="0">Inactive</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" value="Update User">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

