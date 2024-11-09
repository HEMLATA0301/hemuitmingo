@extends('layouts.admin')

@section('content')
    <div class="table-data__tool">
        <div class="table-data__tool-left h5" >
            <h3 class="title-5 ">Team List</h3>
        </div>
        <!-- <div class="table-data__tool-right">
            <a href="{{ route('customer.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add</a>
        </div> -->
    </div>
    
    <x-alert></x-alert>
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Linkedin</th>
                    <th>Status</th>
                    <th>Images</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($records as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->position }}</td>
                        <td>{{ $row->facebook }}</td>
                        <td>{{ $row->instagram }}</td>
                        <td>{{ $row->twitter }}</td>
                        <td>{{ $row->linkedin }}</td>
                        <td>{{ $row->status=="0" ? "Show" : 'Hide' }}</td>
                        <td><img src="{{ asset('image/'.$row->image) }}" alt="employee Image" width="100px;" height="50px;"></td>
                        <td>
                            <div class="table-data-feature ">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send" style="display:none;">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="{{ route('employee.edit',$row) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="{{ route('employee.destroy',$row) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are You Sure to delete?')">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                                
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More" style="display:none;">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Empty Customer Record</td>
                    </tr>
                @endforelse
            </tbody>
           
        </table>
        {{ $records->links('pagination::bootstrap-5') }}
    </div>
@endsection