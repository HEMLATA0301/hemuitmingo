@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>@if(isset($employee)) Update @else Add @endif Employee Master </strong>
    </div>

    <x-alert></x-alert>
    @if(isset($employee))
    <form action="{{ route('employee.update',$employee) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    @else
    <form action="{{ route('employee.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
    @endif

        <div class="card-body card-block">
            <div class="row">
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="Name" class=" form-control-label">Name <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            
                        
                            @isset($employee)
                            <input type="text" id="Name" name="name"   placeholder="Enter Name" value="{{ $employee->name }}" class="form-control" required>
                      @else
                      <input type="text" id="Name" name="name"  placeholder="Enter Name" value="{{ old('name') }}">
                     @endisset
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="Position" class=" form-control-label">Position <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                        
                            @isset($employee)
                            <input type="text" id="Name" name="position"   placeholder="Enter Name" value="{{ $employee->position }}" class="form-control" required>
                      @else
                      <input type="text" id="position" name="position"  placeholder="Enter Name" value="{{ old('position') }}">
                     @endisset
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="FB" class=" form-control-label">FB <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                        @isset($employee)
                            <input type="text" id="Name" name="facebook"   placeholder="Enter Name" value="{{ $employee->facebook }}" class="form-control" required>
                      @else
                      <input type="text" id="facebook" name="facebook"  placeholder="Enter Name" value="{{ old('facebook') }}">
                     @endisset
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="FB" class=" form-control-label">Insta <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            @isset($employee)
                            <input type="text" id="Name" name="instagram"   placeholder="Enter Name" value="{{ $employee->instagram }}" class="form-control" required>
                      @else
                      <input type="text" id="instagram" name="instagram"  placeholder="Enter Name" value="{{ old('instagram') }}">
                     @endisset
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="FB" class=" form-control-label">Twitter <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <!-- <input type="text" id="Twitter" name="twitter" value="{{ old('Twitter') }}"  placeholder="Enter Twitter" class="form-control" required> -->
                            @isset($employee)
                            <input type="text" id="twitter" name="twitter"   placeholder="Enter Name" value="{{ $employee->twitter }}" class="form-control" required>
                      @else
                      <input type="text" id="twitter" name="twitter" placeholder="Enter Name" value="{{ old('twitter') }}">
                     @endisset
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="FB" class=" form-control-label">Linkdin <span style="color:red">*</span></label>
                        </div>
                        <div class="col-12 col-md-9">
                            <!-- <input type="text" id="Linkdin" name="linkedin" value="{{ old('Linkdin') }}"  placeholder="Enter Linkdin" class="form-control" required> -->

                            @isset($employee)
                            <input type="text" id="Name" name="linkedin"   placeholder="Enter Name linkedin" value="{{ $employee->linkedin }}" class="form-control" required>
                      @else
                      <input type="text" id="linkedin" name="linkedin"  placeholder="Enter Name" value="{{ old('linkedin') }}">
                     @endisset

                        </div>
                    </div>
                </div>

            
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="status" class=" form-control-label">Status</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="status" class="form-control" required>
                                <option value="0">Show</option>
                                <option value="1">Hide</option>
                                
                            </select>
                            <script>
                                $('#status').val({{isset($tema->status) ? $team->status: ''}});
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="image" name="image" class="form-control" @empty($employee) required @endempty accept="image/*">
                        </div>
                        @isset($employee) 
                            <img src="{{ asset('image/'.$employee->image) }}" name="image" alt="Product Image" width="100px;" height="100px;">
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