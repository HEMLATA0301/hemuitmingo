@extends('layouts.admin')

@section('content')
    <div class="table-data__tool">
        <div class="table-data__tool-left h5" >
            <h3 class="title-5 ">Product List</h3>
        </div>
        <div class="table-data__tool-right">
            <a href="{{ route('product.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add</a>
        </div>
    </div>
    
    <x-alert></x-alert>
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Title</th>
                    <th>Feature</th>
                    <th>Priority</th>
                    <th>Short Description</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->feature }}</td>
                        <td>{{ $row->priority }}</td>
                        <td>{{ $row->short_description }}</td>
                        <td>
                            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#scrollmodal" onclick="description({{ $row->id }});">
                                Show
                            </button>
                            <input type="hidden" id="title{{ $row->id }}" value="{{ $row->title }}">
                            <input type="hidden" id="description{{ $row->id }}" value="{{ $row->description }}">
                        </td>
                        <td>{{ $row->status=="0" ? "Show" : 'Hide' }}</td>
                        <td><img src="{{ asset('image/'.$row->image) }}" alt="Product Image" width="100px;" height="100px;"></td>
                        <td>
                            <div class="table-data-feature ">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send" style="display:none;">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="{{ route('product.edit',$row) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="{{ route('product.destroy',$row) }}" method="POST">
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
                        <td colspan="9" class="text-center">Empty Product Record</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
@endsection

@section('modal')
    <!-- modal scroll -->
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollmodalLabel"><h5 id="show_title"></h5></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="show_description"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        function description(id){
            var description=$('#description'+id).val();
            var title=$('#title'+id).val();
            $('#show_description').html(description);
            $('#show_title').html(title);
        }
    </script>
@endpush