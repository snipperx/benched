@extends('layouts.mainlayout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pretty-checkbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
@stop

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="container">
                    <div class=" ">
                        <div class="card-body center">
                            <h1>Add Roles</h1>
                            <h5 class="card-title">Add new role and assign permissions.</h5>

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('roles.store') }}">
                                @csrf
                                <fieldset>
                                    <div class=" col-xl-12 form-group ">
                                        <label for="name">Name</label>
                                        <input class="form-control" value="{{ old('name') }}" name="name" type="text"
                                               placeholder="Name" required>

                                    </div>
                                    <br>
                                    <label for="permissions" class="form-label">Assign Permissions</label>

                                    <table class="table table-striped col-lg-12">
                                        <thead>

                                        <th>
                                            <div class="pretty p-icon p-toggle p-plain p-bigger">
                                                <input type="checkbox" name="select-all"
                                                       id="select_all">
                                                <div class="state p-primary-o p-on ">
                                                    <i class="icon mdi mdi-eye"></i>
                                                    &nbsp;
                                                    <label> Check All </label>
                                                </div>
                                                <div class="state p-off">
                                                    <i class="icon mdi mdi-eye-off"></i>
                                                    &nbsp;
                                                    <label> Uncheck All </label>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" width="20%">Name</th>
                                        <th scope="col" width="1%">Guard</th>
                                        </thead>

                                        @foreach($permissions as $key => $permission)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-flat form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"
                                                                   id="#select-all"
                                                                   name="permission[{{ $permission->name }}]" --}}
                                                                   value="{{ $permission->name }}"
                                                                   class="permission">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ $permission->name ?? '' }}</td>
                                                <td>{{ $permission->guard_name ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <br>


                                    <div class="container-fluid w-120 col-lg-10">
                                        <a href="{{ route('roles.index') }}" class="btn btn-primary float-left mt-4 ml-2">
                                            <i class="mdi mdi-keyboard-return"></i>
                                            Back
                                        </a>
{{----}}
                                        <button type="submit" class="btn btn-primary float-right mt-4 ">
                                            <i class="mdi mdi-content-save-all"></i>
                                             Save Role </button>
                                    </div>

{{--                                    <input class="btn btn-primary" type="submit" value="Back">--}}
{{--                                    <button type="submit" class="btn btn-primary text-end">Save Role</button>--}}

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script>
        let permission = $('.permission');

        $("#select_all").change(function () {
            if ($(this).prop('checked')) {
                permission.prop('checked', true);
            } else {
                permission.prop('checked', false);
            }
        });
    </script>
@stop

