@extends('layouts.adminlayout')
@section('pagetitle', 'Rooms')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rooms.room.index') }}" class="btn btn-primary" title="Show All Rooms">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-xl-11 col-lg-11">
                    <h2 class="m-0 font-weight-bold text-center" style="color:#ff9933;">Create New Rooms</h2>
                </div>
                <div class="col-xl-1 col-lg-1">
                    
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form method="POST" action="{{ route('rooms.room.multistore') }}" accept-charset="UTF-8" id="create_room_form" name="create_room_form" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="table-responsive">
                                <table id="faqs" class="table">
                                    <thead>
                                        <tr>
                                            <th>Room Name</th>
                                            <th>Room Length</th>
                                            <th>Room Width</th>
                                            <th>Room Dimention Unit</th>
                                            <th>Room Dimention display</th>
                                            <th>Room Area Unit</th>
                                            <th>Property Id</th>
                                            <th><a class="btn btn-success" onclick="addfaqs();"><i class="fa fa-plus"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-control" name="room_name[]" type="text" id="room_name"
                                                    minlength="1" placeholder="Room name">
                                                {!! $errors->first('room_name', '<p class="help-block">:message</p>') !!}
                                            </td>
                                            <td>
                                                <input class="form-control" name="room_length[]" type="number"
                                                    id="room_length" step="0.01" placeholder="(eg:-10000.01)">
                                                {!! $errors->first('room_length', '<p class="help-block">:message</p>') !!}
                                            </td>
                                            <td>
                                                <input class="form-control" name="room_width[]" type="number" id="room_width"
                                                    step="0.01" placeholder="(eg:-10000.01)">
                                                {!! $errors->first('room_width', '<p class="help-block">:message</p>') !!}
                                            </td>
                                            <td>
                                                <select class="form-control" id="room_dimention_unit"
                                                    name="room_dimention_unit[]">
                                                    <option value="" style="display: none;" disabled selected>dimention unit
                                                    </option>
                                                    @foreach (['m' => 'Metres',
                                                    'cm' => 'Centimetres',
                                                    'mm' => 'Millimetres',
                                                    'feet' => 'Feet',
                                                    'inche' => 'Inches'] as $key => $text)
                                                    <option value="{{ $key }}">
                                                        {{ $text }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('room_dimention_unit', '<p class="help-block">:message
                                                </p>') !!}
                                            </td>
                                            <td>
                                                <input class="form-control" name="room_dimention_display[]" type="text"
                                                    id="room_dimention_display" minlength="1"
                                                    placeholder="dimention display">
                                                {!! $errors->first('room_dimention_display', '<p class="help-block">:message
                                                </p>') !!}
                                            </td>
                                            <td>
                                                <select class="form-control" id="room_area_unit" name="room_area_unit[]">
                                                    <option value="" style="display: none;" disabled selected>room area unit
                                                    </option>
                                                    @foreach (['sq m' => 'sq m',
                                                    'sq cm' => 'sq cm',
                                                    'sq mm' => 'sq mm',
                                                    'sq ft' => 'sq ft',
                                                    'sq inch' => 'sq inch'] as $key => $text)
                                                    <option value="{{ $key }}">
                                                        {{ $text }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('room_area_unit', '<p class="help-block">:message</p>')
                                                !!}
                                            </td>
                                            <td>
                                                <input class="form-control" name="property_id[]" type="text" id="property_id" value="{{ $pro_id }}" min="0" max="4294967295" required="true"
                                                    placeholder="property id">
                                                {!! $errors->first('property_id', '<p class="help-block">:message</p>') !!}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-org" type="submit" value="Add Room">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var faqs_row = 0;
    function addfaqs(){
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td><input class="form-control" name="room_name[]" type="text" id="room_name" minlength="1" placeholder="Room name"></td>';
        html += '<td><input class="form-control" name="room_length[]" type="number" id="room_length" step="0.01" placeholder="(eg:-10000.01)"></td>';
        html += '<td><input class="form-control" name="room_width[]" type="number" id="room_width" step="0.01" placeholder="(eg:-10000.01)"></td>';
        html += '<td><select class="form-control" id="room_dimention_unit" name="room_dimention_unit[]">'+
                        '<option value="" style="display: none;" disabled selected>dimention unit</option>'+
                        '<option value="m" >Metres</option>'+
                        '<option value="cm" >Centimetres</option>'+
                        '<option value="mm" >Millimetres</option>'+
                        '<option value="feet" >Feet</option>'+
                        '<option value="inche" >Inches</option>'+
                '</select></td>';
        html += '<td><input class="form-control" name="room_dimention_display[]" type="text" id="room_dimention_display" minlength="1" placeholder="dimention display"></td>';
        html += '<td><select class="form-control" id="room_area_unit" name="room_area_unit[]">'+
                        '<option value="" style="display: none;" disabled selected>room area unit</option>'+
                        '<option value="sq m" >sq m</option>'+
                        '<option value="sq cm" >sq cm</option>'+
                        '<option value="sq mm" >sq mm</option>'+
                        '<option value="sq feet" >sq feet</option>'+
                        '<option value="sq inch" >sq inch</option>'+
                '</select></td>';
        html += '<td><input class="form-control" name="property_id[]" type="text" id="property_id" value="{{ $pro_id }}" min="0" max="4294967295" required="true" placeholder="property id"></td>';
        html += '<td><a href="javascript:void(0)" class="btn btn-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></a></td>';

        html += '</tr>';
    $('#faqs tbody').append(html);

    faqs_row++;
    }
</script>

@endsection
