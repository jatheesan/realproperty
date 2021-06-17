<div class="row">
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('catagery') ? 'has-error' : '' }}">
            <label for="catagery" class="col-md-12 control-label">Catagery</label>
            <div class="col-md-12">
                <select class="form-control" id="catagery" name="catagery">
                    <option value="" style="display: none;" {{ old('catagery', optional($proparty)->catagery ?: '') == '' ? 'selected' : '' }} disabled selected>Select catagery here...</option>
                    @foreach (['for sale' => 'For Sale',
        'for let' => 'For Let',
        'shared accommodation' => 'Shared Accommodation'] as $key => $text)
                        <option value="{{ $key }}" {{ old('catagery', optional($proparty)->catagery) == $key ? 'selected' : '' }}>
                            {{ $text }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('catagery', '<p class="help-block">:message</p>') !!}
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
            <label for="type" class="col-md-12 control-label">Property Type</label>
            <div class="col-md-12">
                <select class="form-control" id="type" name="type">
                        <option value=""  {{ old('type', optional($proparty)->type ?: '') == '' ? 'selected' : '' }} selected>Select type here...</option>
                    @foreach ($propertytypes as $key => $propertytype)
                        <option value="{{ $key }}" {{ old('type', optional($proparty)->type) == $key ? 'selected' : '' }}>
                            {{ $propertytype }}
                        </option>
                    @endforeach
                </select>
                
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group {{ $errors->has('date_intake') ? 'has-error' : '' }}">
            <label for="date_intake" class="col-md-12 control-label">Date Intake</label>
            <div class="col-md-12">
                <input class="form-control" name="date_intake" type="date" id="date_intake" value="{{ old('date_intake', optional($proparty)->date_intake) }}" placeholder="Enter date intake here...">
                {!! $errors->first('date_intake', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <h4 class="color-b">Property Address</h4><hr color="orange"/>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('door_no') ? 'has-error' : '' }}">
            <label for="door_no" class="col-md-12 control-label">Door No</label>
            <div class="col-md-12">
                <input class="form-control" name="door_no" type="number" id="door_no" value="{{ old('door_no', optional($proparty)->door_no) }}" min="-2147483648" max="2147483647" placeholder="Enter door no here...">
                {!! $errors->first('door_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('door_name') ? 'has-error' : '' }}">
            <label for="door_name" class="col-md-12 control-label">Door Name</label>
            <div class="col-md-12">
                <input class="form-control" name="door_name" type="text" id="door_name" value="{{ old('door_name', optional($proparty)->door_name) }}" minlength="1" placeholder="Enter door name here...">
                {!! $errors->first('door_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('first_pastcode') ? 'has-error' : '' }}">
            <label for="first_pastcode" class="col-md-12 control-label">First Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="first_pastcode" type="text" id="first_pastcode" value="{{ old('first_pastcode', optional($proparty)->first_pastcode) }}" maxlength="5" placeholder="Enter first pastcode here...">
                {!! $errors->first('first_pastcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_pastcode') ? 'has-error' : '' }}">
            <label for="second_pastcode" class="col-md-12 control-label">Second Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="second_pastcode" type="text" id="second_pastcode" value="{{ old('second_pastcode', optional($proparty)->second_pastcode) }}" maxlength="5" placeholder="Enter second pastcode here...">
                {!! $errors->first('second_pastcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('street_name') ? 'has-error' : '' }}">
            <label for="street_name" class="col-md-12 control-label">Street Name</label>
            <div class="col-md-12">
                <input class="form-control" name="street_name" type="text" id="street_name" value="{{ old('street_name', optional($proparty)->street_name) }}" placeholder="Enter street name here...">
                {!! $errors->first('street_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_street_name') ? 'has-error' : '' }}">
            <label for="second_street_name" class="col-md-12 control-label">Second Street Name</label>
            <div class="col-md-12">
                <input class="form-control" name="second_street_name" type="text" id="second_street_name" value="{{ old('second_street_name', optional($proparty)->second_street_name) }}" placeholder="Enter second street name here...">
                {!! $errors->first('second_street_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('post_town') ? 'has-error' : '' }}">
                    <label for="post_town" class="col-md-12 control-label">Post Town</label>
                    <div class="col-md-12">
                        <input class="form-control" name="post_town" type="text" id="post_town"
                            value="{{ old('post_town', optional($proparty)->post_town) }}" minlength="1"
                            placeholder="Enter post town here...">
                        {!! $errors->first('post_town', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('post_city') ? 'has-error' : '' }}">
                    <label for="post_city" class="col-md-12 control-label">Post City</label>
                    <div class="col-md-12">
                        <input class="form-control" name="post_city" type="text" id="post_city" value="{{ old('post_city', optional($proparty)->post_city) }}" minlength="1" placeholder="Enter post city here...">
                        {!! $errors->first('post_city', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('post_country') ? 'has-error' : '' }}">
                    <label for="post_country" class="col-md-12 control-label">Post Country</label>
                    <div class="col-md-12">
                        <input class="form-control" name="post_country" type="text" id="post_country" value="{{ old('post_country', optional($proparty)->post_country) }}" minlength="1" placeholder="Enter post country here...">
                        {!! $errors->first('post_country', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('display_address') ? 'has-error' : '' }}">
            <label for="display_address" class="col-md-12 control-label">Display Address</label>
            <div class="col-md-12">
                <textarea class="form-control" name="display_address" cols="40" rows="8" id="display_address" minlength="1" placeholder="Enter display address here...">{{ old('display_address', optional($proparty)->display_address) }}</textarea>
                {!! $errors->first('display_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <h4 class="color-b">Property Enquiry Details</h4><hr color="orange"/>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('enquiry_contact') ? 'has-error' : '' }}">
            <label for="enquiry_contact" class="col-md-12 control-label">Property Enquiry Contact</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_contact" type="text" id="enquiry_contact" value="{{ old('enquiry_contact', optional($proparty)->enquiry_contact) }}" minlength="1" placeholder="Enter property enquiry contact here...">
                {!! $errors->first('enquiry_contact', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group {{ $errors->has('enquiry_email') ? 'has-error' : '' }}">
            <label for="enquiry_email" class="col-md-12 control-label">Property Enquiry Email</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_email" type="email" id="enquiry_email" value="{{ old('enquiry_email', optional($proparty)->enquiry_email) }}" placeholder="Enter property enquiry contact here...">
                {!! $errors->first('enquiry_email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>