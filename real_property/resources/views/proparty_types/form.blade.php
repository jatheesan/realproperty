
<div class="form-group {{ $errors->has('type_name') ? 'has-error' : '' }}">
    <label for="type_name" class="col-xl-12 control-label">Proparty Type Name</label>
    <div class="col-xl-12">
        <input class="form-control" name="type_name" type="text" id="type_name" value="{{ old('type_name', optional($propartyType)->type_name) }}" minlength="1" maxlength="255" placeholder="Enter name here..." require>
        {!! $errors->first('type_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

