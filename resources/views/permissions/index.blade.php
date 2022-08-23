@extends('layouts.mainlayout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
@stop

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> Permissions </h6>
                        {{--                        <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                        <div class="lead">
                            Manage your Permissions here.
                            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">
                                <i class="btn-icon-prepend" data-feather="file-plus"></i>
                                Add Permission</a>
                        </div>
                        <br>
                        <div>
                            @include('layouts.partials.messages')
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Name</th>
                                    <th>Guard</th>
                                    <th width="3%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $key => $permission)
                                    <tr>
                                        <td></td>
                                        <td data-toggle="tooltip" title='{{$permission->name}}'>{{ $permission->name ?? ''}}</td>
                                        <td data-toggle="tooltip" title='{{$permission->guard_name}}'>{{ $permission->guard_name ?? '' }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" data-toggle="tooltip" title='Edit'
                                               href="{{ route('permissions.edit', $permission->id) }}">
                                                <i class="btn-icon-prepend" data-feather="edit"></i>
                                                Edit</a>

                                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                                  style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                <button type="submit" class="btn btn-xs btn-danger btn-flat delete_confirm"
                                                        data-toggle="tooltip" title='Delete'>
                                                    <i class="btn-icon-prepend" data-feather="trash"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
@section('scripts')
    <!-- plugin js for this page -->
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/promise-polyfill/polyfill.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
    <script src="{{ asset('js/deleteAlert.js') }}"></script>

    <script type="text/javascript">
        swal('delete_confirm');
    </script>

    <script>
        @if (Session::has('changes_saved'))
            Swal.fire({!!Session::pull('alert.config')!!});  // working
        @endif
    </script>

@stop
