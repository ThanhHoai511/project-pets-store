@extends('admin.layouts.master')
@section('title','Product')
@section('content')
    @include('admin.layouts.success')
    <div class="portlet-body" style="border: 1px solid #ddd;
    border-radius: 4px; padding:10px; margin-bottom:10px;">
        <div class="table-toolbar">
            <form action="" method="GET" class="form-horizontal form-bordered" id="filter_box">
                <div class="row">
                    <!-- Filter Name -->
                    <div class="col-md-3">
                        <input type="text" name="name" value="" placeholder="Tên" class="form-control">
                        <div class="help-block">Tên</div>
                    </div>
                    <!-- Filter Date -->
                    <div class="col-md-4">
                        <div class="input-group input-large date-picker input-daterange">
                            <input value="{{old('begin_date')}}" readonly name="begin_date" placeholder="Bắt đầu" data-toggle="datepicker" data-provide="datepicker" type="text" class="form-control">
                            <span class="input-group-addon"> đến </span>
                            <input value="{{old('end_date')}}" name="end_date" data-toggle="datepicker" readonly placeholder="Kết thúc" type="text" class="form-control">
                        </div>
                        <div class="help-block">Ngày tạo</div>
                    </div>
                    <!-- Search Submit -->
                    <div class="col-md-1">
                        <input type="submit" name="search" class="btn btn-success" value="Tìm kiếm" />
                    </div>
                </div>
            </form>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('product.add') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Photos</th>
                                <th>Product Category</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($product as $pro)
	                            <tr>
	                                <td>{{ $pro->id }}</td>
	                                <td>{{ $pro->name }}</td>
                                    <td>{{ $pro->price }}</td>
	                                <td>{{ $pro->description }}</td>
                                    <td>
                                        @php
                                            $photos = $pro->getImage($pro->id);
                                        @endphp
                                        @foreach ($photos as $photo)
                                            <img src="{{ asset('upload/product/' . $photo) }}" alt="" style="max-width: 150px;max-height: 100px;">
                                        @endforeach
                                    </td>
                                    <td>{{ $pro->productcategory->name }}</td>
                                    <td>{{ $pro->created_at }}</td>
                                    <td>{{ $pro->updated_at }}</td>
	                                <td>
	                                	<a href="{{ route('product.edit', ['id' => $pro->id]) }}"><button class="btn btn-success">Edit</button></a>
	                                	<a href="{{ route('product.delete', ['id' => $pro->id]) }}" onclick="return confirm('Are you sure delete {{ $pro->name }}?')"><button class="btn btn-danger">Delete</button></a>
	                                </td>
	                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination" style="padding-left: 300px;">
                    <p>{{ $product->links() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection