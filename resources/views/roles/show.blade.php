
@extends('layouts.mainlayout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
@stop

@section('content')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($role->name) }} Role </li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="container">
                <div class=" ">
                    <div class="card-body center">
                        <h1>{{ ucfirst($role->name) }} Role</h1>
                        <br>
                        <h3>Assigned permissions</h3>

                            <fieldset>

{{--                                <label for="permissions" class="form-label">Assigned permissions</label>--}}
                                <br>
                                <table class="table table-striped col-lg-12">
                                    <thead>
                                    <th scope="col" width="20%">Name</th>
                                    <th scope="col" width="1%">Guard</th>
                                    </thead>

                                    @foreach($rolePermissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name ?? '' }}</td>
                                            <td>{{ $permission->guard_name ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <br>


                                <div class="container-fluid w-120 col-lg-10">

                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary float-right mt-4">
                                        <i class="btn-icon-prepend" data-feather="edit"></i>
                                        Edit</a>

                                    <a href="{{ route('roles.index') }}" class="btn btn-primary float-left mt-4 ml-2">
                                        <i class="mdi mdi-keyboard-return"></i>
                                        Back
                                    </a>
                                    {{----}}
{{--                                    <button type="submit" class="btn btn-primary float-right mt-4 ">--}}
{{--                                        <i class="mdi mdi-content-save-all"></i>--}}
{{--                                        Save Role </button>--}}
                                </div>

                            </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
