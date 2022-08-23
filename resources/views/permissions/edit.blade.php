@extends('layouts.mainlayout')

@section('content')


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="container">
                    <div class=" ">
                        <div class="card-body center">
                            <h1>Edit Permission</h1>
                            <br>
                            <div class="lead">
                                Editing permission.
                            </div>
                            <br>
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

                            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                                @method('patch')
                                @csrf
                                <fieldset>
                                    <div class=" col-xl-12 form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" value="{{ $permission->name }}"
                                               name="name" type="text"
                                               placeholder="Name" required>

                                        @if ($errors->has('name'))
                                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif

                                    </div>


                                    <div class="container-fluid w-100">
                                        {{----}}
                                        <button type="submit" class="btn btn-primary float-right mt-4">
                                            <i class="mdi mdi-content-save-all"></i>
                                            Save Permission
                                        </button>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
