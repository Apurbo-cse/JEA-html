@extends('layouts.admin.master')
@section('title', 'Create Blog')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Blog</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Create Blog</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Blog Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-2 control-label">blog Category</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($blog_categories as $category)
                                        <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">blog Route</label>
                            <div class="col-sm-10">
                                <select name="route_id" id="route_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Route</option>
                                    @foreach($routes as $route)
                                        <option @if(old('route_id') == $route->id) selected @endif value="{{ $route->id }}"> {{ $route->route_name }} </option>
                                    @endforeach
                                </select>
                                @error('route_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">blog Name</label>
                            <div class="col-md-10">
                                <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control" placeholder="blog name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Tracking Phone Number</label>
                            <div class="col-md-10">
                                <input value="{{old('tracking_number')}}" name="tracking_number" type="tel" id="tracking_number" class="form-control" placeholder="013xxxxxxxx">
                                @error('tracking_number')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Total Seats</label>
                            <div class="col-md-10">
                                <input min="10" value="{{old('total_seats')}}" name="total_seats" type="number" id="total_seats" class="form-control" placeholder="Total Seats">
                                @error('total_seats')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">blog Code</label>
                            <div class="col-md-10">
                                <input value="{{old('blog_code')}}" name="blog_code" type="text" id="blog_code" class="form-control" placeholder="blog code">
                                @error('blog_code')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>

                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
