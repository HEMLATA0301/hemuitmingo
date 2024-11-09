@extends('layouts.admin')

@section('content')
    <div class="table-data__tool">
        <div class="table-data__tool-left h5" >
            <h3 class="title-5 ">Career List</h3>
        </div>
        <div class="table-data__tool-right none">
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
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Skill</th>
                    <th>Qualification</th>
                    <th>Resume</th>
                    <th>Uploaded Date</th>
                    <th class="text-right none">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($careers as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->mobile }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->skill }}</td>
                        <td>{{ $row->qualification }}</td>
                        <td><a href="{{ asset('pdf/'.$row->resume) }}" class="btn btn-sm btn-primary">Show</a></td>
                        <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-M-Y h:i A') }}</td>
                        <td class="none">
                            <div class="table-data-feature ">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send" style="display:none;">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <form action="#" method="POST">
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
                        <td colspan="9" class="text-center">Empty Career Record</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $careers->links('pagination::bootstrap-5') }}
    </div>
@endsection

@section('modal')
    <!-- modal scroll -->
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollmodalLabel"><h5 id="show_name"></h5></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="show_message"></div>
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
        //Career message show in model
        function message(id){
            var message=$('#message'+id).val();
            var name=$('#name'+id).val();
            $('#show_message').html(message);
            $('#show_name').html(name);
        }
    </script>
@endpush