
<div class="form-group {{ $errors->has('room_name') ? 'has-error' : '' }}">
    <label for="room_name" class="col-md-2 control-label">Room Name</label>
    <div class="col-md-10">
        <input class="form-control" name="room_name" type="text" id="room_name" value="{{ old('room_name', optional($room)->room_name) }}" minlength="1" placeholder="Enter room name here...">
        {!! $errors->first('room_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('room_length') ? 'has-error' : '' }}">
    <label for="room_length" class="col-md-2 control-label">Room Length</label>
    <div class="col-md-10">
        <input class="form-control" name="room_length" type="number" id="room_length" step="0.01" value="{{ old('room_length', optional($room)->room_length) }}" placeholder="Enter room length here...(eg:-10000.01)">
        {!! $errors->first('room_length', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('room_width') ? 'has-error' : '' }}">
    <label for="room_width" class="col-md-2 control-label">Room Width</label>
    <div class="col-md-10">
        <input class="form-control" name="room_width" type="number" id="room_width" step="0.01" value="{{ old('room_width', optional($room)->room_width) }}" placeholder="Enter room width here...(eg:-10000.01)">
        {!! $errors->first('room_width', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('room_dimention_unit') ? 'has-error' : '' }}">
    <label for="room_dimention_unit" class="col-md-2 control-label">Room Dimention Unit</label>
    <div class="col-md-10">
        <select class="form-control" id="room_dimention_unit" name="room_dimention_unit">
        	    <option value="" style="display: none;" {{ old('room_dimention_unit', optional($room)->room_dimention_unit ?: '') == '' ? 'selected' : '' }} disabled selected>Enter room dimention unit here...</option>
        	@foreach (['m' => 'Metres',
'cm' => 'Centimetres',
'mm' => 'Millimetres',
'feet' => 'Feet',
'inche' => 'Inches'] as $key => $text)
			    <option value="{{ $key }}" {{ old('room_dimention_unit', optional($room)->room_dimention_unit) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('room_dimention_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('room_dimention_display') ? 'has-error' : '' }}">
    <label for="room_dimention_display" class="col-md-2 control-label">Room Dimention display</label>
    <div class="col-md-10">
        <input class="form-control" name="room_dimention_display" type="text" id="room_dimention_display" value="{{ old('room_dimention_display', optional($room)->room_dimention_display) }}" minlength="1" placeholder="Enter room dimention display unit here...">
        {!! $errors->first('room_dimention_display', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('room_area_unit') ? 'has-error' : '' }}">
    <label for="room_area_unit" class="col-md-2 control-label">Room Area Unit</label>
    <div class="col-md-10">
        <select class="form-control" id="room_area_unit" name="room_area_unit">
        	    <option value="" style="display: none;" {{ old('room_area_unit', optional($room)->room_area_unit ?: '') == '' ? 'selected' : '' }} disabled selected>Enter room area unit here...</option>
        	@foreach (['sq m' => 'sq m',
'sq cm' => 'sq cm',
'sq mm' => 'sq mm',
'sq ft' => 'sq ft',
'sq inch' => 'sq inch'] as $key => $text)
			    <option value="{{ $key }}" {{ old('room_area_unit', optional($room)->room_area_unit) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('room_area_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('property_id') ? 'has-error' : '' }}">
    <label for="property_id" class="col-md-2 control-label">Property Id</label>
    <div class="col-md-10">
        <input class="form-control" name="property_id" type="text" id="property_id" value="{{ old('property_id', optional($room)->property_id) }}" min="0" max="4294967295" required="true" placeholder="Enter property id here...">
        {!! $errors->first('property_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

