
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($owner)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('contact_no') ? 'has-error' : '' }}">
    <label for="contact_no" class="col-md-2 control-label">Contact No</label>
    <div class="col-md-10">
        <input class="form-control" name="contact_no" type="text" id="contact_no" value="{{ old('contact_no', optional($owner)->contact_no) }}" minlength="1" placeholder="+44 999 999 9999">
        {!! $errors->first('contact_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="email" id="email" value="{{ old('email', optional($owner)->email) }}" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('adderss') ? 'has-error' : '' }}">
    <label for="adderss" class="col-md-2 control-label">Adderss</label>
    <div class="col-md-10">
        <textarea class="form-control" name="adderss" cols="50" rows="10" id="adderss" minlength="1" maxlength="255" placeholder="Enter adderss here...">{{ old('adderss', optional($owner)->adderss) }}</textarea>
        {!! $errors->first('adderss', '<p class="help-block">:message</p>') !!}
    </div>
</div>

