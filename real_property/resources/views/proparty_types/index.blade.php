@extends('layouts.adminlayout')
@section('pagetitle', 'Proparty Types')
@section('content')

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    {{--<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>--}}
                    <div class="col-xl-11 col-lg-11 col-sm-11">
                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <span class="fa fa-ok"></span>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        @endif
                    </div>
                    <div class="float-right">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <a href="{{ route('proparty_types.proparty_type.create') }}" class="btn btn-success" title="Create New Proparty Type">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                        <div class="panel panel-default">
                            @if(count($propartyTypes) == 0)
                                <div class="panel-body text-center">
                                    <h4>No Proparty Types Available.</h4>
                                </div>
                            @else
                            <div class="panel-body panel-body-with-table">
                                <div class="table-responsive">

                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Proparty Type Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1; @endphp
                                            @foreach($propartyTypes as $propartyType)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $propartyType->type_name }}</td>

                                                <td>

                                                    <form method="POST"
                                                        action="{!! route('proparty_types.proparty_type.destroy', $propartyType->type_id) !!}"
                                                        accept-charset="UTF-8">
                                                        <input name="_method" value="DELETE" type="hidden">
                                                        {{ csrf_field() }}

                                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                                            <a href="{{ route('proparty_types.proparty_type.show', $propartyType->type_id ) }}"
                                                                class="btn btn-info" title="Show Proparty Type">
                                                                <span class="fa fa-caret-square-o-up"
                                                                    aria-hidden="true"></span>
                                                            </a>
                                                            <a href="{{ route('proparty_types.proparty_type.edit', $propartyType->type_id ) }}"
                                                                class="btn btn-primary" title="Edit Proparty Type">
                                                                <span class="fa fa-pencil-alt"
                                                                    aria-hidden="true"></span>
                                                            </a>

                                                            <button type="submit" class="btn btn-danger"
                                                                title="Delete Proparty Type"
                                                                onclick="return confirm(&quot;Click Ok to delete Proparty Type.&quot;)">
                                                                <span class="fa fa-trash" aria-hidden="true"></span>
                                                            </button>
                                                        </div>

                                                    </form>

                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="panel-footer">
                                {!! $propartyTypes->render() !!}
                            </div>

                            @endif

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection