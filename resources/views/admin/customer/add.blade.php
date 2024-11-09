@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>@if(isset($customer)) Update @else Add @endif Customer Master </strong>
    </div>

    <x-alert></x-alert>

    @if(isset($customer))
    <form action="{{ route('customer.update',$customer) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @else
    <form action="{{ route('customer.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
    @endif

        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="name" name="name" @isset($customer) value="{{ $customer->name }}" @endisset placeholder="Enter Title" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="status" class=" form-control-label">Status</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="" class="form-control" required>
                                <option value="0" @isset($customer) {{ $customer->status=="0"  ? "selected" : '' }} @endisset>Show</option>
                                <option value="1" @isset($customer) {{ $customer->status=="1" ? "selected" : '' }} @endisset>Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="image" name="image" class="form-control" @empty($customer->image) required @endempty accept="image/*">
                        </div>
                        @isset($customer) 
                            <img src="{{ asset('image/'.$customer->image) }}" alt="Product Image" width="100px;" height="100px;">
                        @endisset
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
</div>
@endsection