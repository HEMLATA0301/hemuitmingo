@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>@if(isset($product)) Update @else Add @endif Product Master </strong>
    </div>

    <x-alert></x-alert>

    @if(isset($product))
    <form action="{{ route('product.update',$product) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @else
    <form action="{{ route('product.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
    @endif

        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="title" name="title" @isset($product) value="{{ $product->title }}" @endisset placeholder="Enter Title" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="feature" class=" form-control-label">Feature</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="feature" name="feature" @isset($product) value="{{ $product->feature }}" @endisset placeholder="Enter Title" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="priority" class=" form-control-label">Priority</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="priority" name="priority" @isset($product) value="{{ $product->priority }}" @endisset placeholder="Enter Priority" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="short_description" class=" form-control-label">Short Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="short_description" name="short_description" @isset($product) value="{{ $product->short_description }}" @endisset placeholder="Enter Short Description" class="form-control" required>
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
                                <option value="0" @isset($product) {{ $product->status=="0"  ? "selected" : '' }} @endisset>Show</option>
                                <option value="1" @isset($product) {{ $product->status=="1" ? "selected" : '' }} @endisset>Hide</option>
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
                            <input type="file" id="image" name="image" class="form-control" @empty($product) required @endempty accept="image/*">
                        </div>
                        @isset($product) 
                            <img src="{{ asset('image/'.$product->image) }}" alt="Product Image" width="100px;" height="100px;">
                        @endisset
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="description" class=" form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea name="description" id="description" class="editor" cols="30" rows="10">@isset($product) {{ $product->description }} @endisset</textarea>
                        </div>
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