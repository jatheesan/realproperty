<div class="row">
<div class="col-md-4">
        <div class="form-group {{ $errors->has('catagery') ? 'has-error' : '' }}">
            <label for="catagery" class="col-md-12 control-label">Catagery</label>
            <div class="col-md-12">
                <select class="form-control" id="catagery" name="catagery">
                        <option value=""{{ old('catagery', optional($property)->catagery ?: '') == '' ? 'selected' : '' }} disabled selected>Catagery</option>  
                    @foreach (['for sale' => 'For Sale',
                                'for let' => 'For Let',
                                'for shared' => 'For Shared'] as $key => $text)
                        <option value="{{ $key }}" {{ old('catagery', optional($property)->catagery) == $key ? 'selected' : '' }}>
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
                        <option value="" {{ old('type', optional($property)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
                    @foreach ($propertytypes as $key => $propertytype)
                        <option value="{{ $key }}" {{ old('type', optional($property)->type) == $key ? 'selected' : '' }}>
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
            <label for="date_intake" class="col-md-12 control-label">date Intake</label>
            <div class="col-md-12">
                <input class="form-control" name="date_intake" type="date" id="date_intake" value="{{ old('date_intake', optional($property)->date_intake) }}" placeholder="Enter date intake here...">
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
                <input class="form-control" name="door_no" type="number" id="door_no" value="{{ old('door_no', optional($property)->door_no) }}" min="0" max="2147483647" placeholder="Enter door no here...">
                {!! $errors->first('door_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('door_name') ? 'has-error' : '' }}">
            <label for="door_name" class="col-md-12 control-label">Door Name</label>
            <div class="col-md-12">
                <input class="form-control" name="door_name" type="text" id="door_name" value="{{ old('door_name', optional($property)->door_name) }}" minlength="1" placeholder="Enter door name here...">
                {!! $errors->first('door_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('first_postcode') ? 'has-error' : '' }}">
            <label for="first_postcode" class="col-md-12 control-label">First Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="first_postcode" type="text" id="first_postcode" value="{{ old('first_postcode', optional($property)->first_postcode) }}" placeholder="Enter first postcode here...">
                {!! $errors->first('first_postcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_postcode') ? 'has-error' : '' }}">
            <label for="second_postcode" class="col-md-12 control-label">Second Postcode</label>
            <div class="col-md-12">
                <input class="form-control" name="second_postcode" type="text" id="second_postcode" value="{{ old('second_postcode', optional($property)->second_postcode) }}" placeholder="Enter second postcode here...">
                {!! $errors->first('second_postcode', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('street_name') ? 'has-error' : '' }}">
            <label for="street_name" class="col-md-12 control-label">Street Name</label>
            <div class="col-md-12">
                <input class="form-control" name="street_name" type="text" id="street_name" value="{{ old('street_name', optional($property)->street_name) }}" placeholder="Enter street name here...">
                {!! $errors->first('street_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('second_line_of_address') ? 'has-error' : '' }}">
            <label for="second_line_of_address" class="col-md-12 control-label">Second Line of Address</label>
            <div class="col-md-12">
                <input class="form-control" name="second_line_of_address" type="text" id="second_line_of_address" value="{{ old('second_line_of_address', optional($property)->second_line_of_address) }}" placeholder="Enter second line of address here...">
                {!! $errors->first('second_line_of_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_town') ? 'has-error' : '' }}">
            <label for="post_town" class="col-md-12 control-label">Post Town</label>
            <div class="col-md-12">
                <input class="form-control" name="post_town" type="text" id="post_town" value="{{ old('post_town', optional($property)->post_town) }}" minlength="1" placeholder="Enter post town here...">
                {!! $errors->first('post_town', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_city') ? 'has-error' : '' }}">
            <label for="post_city" class="col-md-12 control-label">Post City</label>
            <div class="col-md-12">
                <input class="form-control" name="post_city" type="text" id="post_city" value="{{ old('post_city', optional($property)->post_city) }}" minlength="1" placeholder="Enter post city here...">
                {!! $errors->first('post_city', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group {{ $errors->has('post_country') ? 'has-error' : '' }}">
            <label for="post_country" class="col-md-12 control-label">Post Country</label>
            <div class="col-md-12">
                <input class="form-control" name="post_country" type="text" id="post_country" value="{{ old('post_country', optional($property)->post_country) }}" minlength="1" placeholder="Enter post country here...">
                {!! $errors->first('post_country', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group {{ $errors->has('display_address_line1') ? 'has-error' : '' }}">
            <label for="display_address_line1" class="col-md-12 control-label">Display Address Line1</label>
            <div class="col-md-12">
                <input class="form-control" name="display_address_line1" type="text" id="display_address_line1" value="{{ old('display_address_line1', optional($property)->display_address_line1) }}" minlength="1" placeholder="Enter display address line 1 here...">
                {!! $errors->first('display_address_line1', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group {{ $errors->has('display_address_line2') ? 'has-error' : '' }}">
            <label for="display_address_line2" class="col-md-12 control-label">Display Address Line2</label>
            <div class="col-md-12">
                <input class="form-control" name="display_address_line2" type="text" id="display_address_line2" value="{{ old('display_address_line2', optional($property)->display_address_line2) }}" minlength="1" placeholder="Enter display address line 2 here...">
                {!! $errors->first('display_address_line2', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group {{ $errors->has('display_address') ? 'has-error' : '' }}">
            <label for="display_address" class="col-md-12 control-label">Display Address</label>
            <div class="col-md-12">
                <div class="checkbox">
                    <label for="display_address_1">
                        <input id="display_address_1" class="" name="display_address" type="checkbox" value="1" {{ old('display_address', optional($property)->display_address) == '1' ? 'checked' : '' }}>
                        Yes
                    </label>
                </div>

                {!! $errors->first('display_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="color-b">Property Enquiry Details</h4><hr color="orange"/>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('enquiry_contact') ? 'has-error' : '' }}">
            <label for="enquiry_contact" class="col-md-12 control-label">Property Enquiry Contact No</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_contact" type="text" id="enquiry_contact" value="{{ old('enquiry_contact', optional($property)->enquiry_contact) }}" minlength="1" placeholder="Enter property enquiry contact here...">
                {!! $errors->first('enquiry_contact', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group {{ $errors->has('enquiry_email') ? 'has-error' : '' }}">
            <label for="enquiry_email" class="col-md-12 control-label">Property Enquiry Email</label>
            <div class="col-md-12">
                <input class="form-control" name="enquiry_email" type="email" id="enquiry_email" value="{{ old('enquiry_email', optional($property)->enquiry_email) }}" placeholder="Enter property enquiry email here...">
                {!! $errors->first('enquiry_email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>