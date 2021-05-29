
<div class="form-group {{ $errors->has('catagery') ? 'has-error' : '' }}">
    <label for="catagery" class="col-md-2 control-label">Catagery</label>
    <div class="col-md-10">
        <select class="form-control" id="catagery" name="catagery">
        	    
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

<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="type" class="col-md-2 control-label">Property Type</label>
    <div class="col-md-10">
        <select class="form-control" id="type" name="type">
        	    <option value="" style="display: none;" {{ old('type', optional($proparty)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Enter type here...</option>
        	@foreach ($propertytypes as $key => $propertytype)
			    <option value="{{ $key }}" {{ old('type', optional($proparty)->type) == $key ? 'selected' : '' }}>
			    	{{ $propertytype }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
    <label for="age" class="col-md-2 control-label">Property Age</label>
    <div class="col-md-10">
        <select class="form-control" id="age" name="age">
        	    
        	@foreach (['Mid 90' => 'Mid 90',
'Mid 40' => 'Mid 40',
'New' => 'New',
'Newly build' => 'Newly build'] as $key => $text)
			    <option value="{{ $key }}" {{ old('age', optional($proparty)->age) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('minimum_term') ? 'has-error' : '' }}">
    <label for="minimum_term" class="col-md-2 control-label">Minimum Term</label>
    <div class="col-md-10">
        <select class="form-control" id="minimum_term" name="minimum_term">
        	    
        	@foreach (['1 month' => '1 Month',
'3 month' => '2 Month',
'1 year' => '1 Year',
'2-5 year' => '2-5 Year',
'long-term' => 'Long-term'] as $key => $text)
			    <option value="{{ $key }}" {{ old('minimum_term', optional($proparty)->minimum_term) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('minimum_term', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('door_no') ? 'has-error' : '' }}">
    <label for="door_no" class="col-md-2 control-label">Door No</label>
    <div class="col-md-10">
        <input class="form-control" name="door_no" type="number" id="door_no" value="{{ old('door_no', optional($proparty)->door_no) }}" min="-2147483648" max="2147483647" placeholder="Enter door no here...">
        {!! $errors->first('door_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('door_name') ? 'has-error' : '' }}">
    <label for="door_name" class="col-md-2 control-label">Door Name</label>
    <div class="col-md-10">
        <input class="form-control" name="door_name" type="text" id="door_name" value="{{ old('door_name', optional($proparty)->door_name) }}" minlength="1" placeholder="Enter door name here...">
        {!! $errors->first('door_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('first_pastcode') ? 'has-error' : '' }}">
    <label for="first_pastcode" class="col-md-2 control-label">First Postcode</label>
    <div class="col-md-10">
        <input class="form-control" name="first_pastcode" type="text" id="first_pastcode" value="{{ old('first_pastcode', optional($proparty)->first_pastcode) }}" maxlength="3" placeholder="Enter first pastcode here...">
        {!! $errors->first('first_pastcode', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('second_pastcode') ? 'has-error' : '' }}">
    <label for="second_pastcode" class="col-md-2 control-label">Second Postcode</label>
    <div class="col-md-10">
        <input class="form-control" name="second_pastcode" type="text" id="second_pastcode" value="{{ old('second_pastcode', optional($proparty)->second_pastcode) }}" maxlength="3" placeholder="Enter second pastcode here...">
        {!! $errors->first('second_pastcode', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post_town') ? 'has-error' : '' }}">
    <label for="post_town" class="col-md-2 control-label">Post Town</label>
    <div class="col-md-10">
        <input class="form-control" name="post_town" type="text" id="post_town" value="{{ old('post_town', optional($proparty)->post_town) }}" minlength="1" placeholder="Enter post town here...">
        {!! $errors->first('post_town', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post_city') ? 'has-error' : '' }}">
    <label for="post_city" class="col-md-2 control-label">Post City</label>
    <div class="col-md-10">
        <input class="form-control" name="post_city" type="text" id="post_city" value="{{ old('post_city', optional($proparty)->post_city) }}" minlength="1" placeholder="Enter post city here...">
        {!! $errors->first('post_city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post_country') ? 'has-error' : '' }}">
    <label for="post_country" class="col-md-2 control-label">Post Country</label>
    <div class="col-md-10">
        <input class="form-control" name="post_country" type="text" id="post_country" value="{{ old('post_country', optional($proparty)->post_country) }}" minlength="1" placeholder="Enter post country here...">
        {!! $errors->first('post_country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('display_address') ? 'has-error' : '' }}">
    <label for="display_address" class="col-md-2 control-label">Display Address</label>
    <div class="col-md-10">
        <textarea class="form-control" name="display_address" cols="50" rows="10" id="display_address" minlength="1" placeholder="Enter display address here...">{{ old('display_address', optional($proparty)->display_address) }}</textarea>
        {!! $errors->first('display_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('condition_of_property') ? 'has-error' : '' }}">
    <label for="condition_of_property" class="col-md-2 control-label">Condition of Property</label>
    <div class="col-md-10">
        <select class="form-control" id="condition_of_property" name="condition_of_property">
        	    
        	@foreach (['Require Painting' => 'Require Painting',
'Fully Decorated' => 'Fully Decorated'] as $key => $text)
			    <option value="{{ $key }}" {{ old('condition_of_property', optional($proparty)->condition_of_property) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('condition_of_property', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('furnished_property') ? 'has-error' : '' }}">
    <label for="furnished_property" class="col-md-2 control-label">Furnished Property</label>
    <div class="col-md-10">
        <label for="furnished_property_bed_and_sofa_included" class="checkbox-inline">
            <input id="furnished_property_bed_and_sofa_included" class="required" name="furnished_property[]" type="checkbox" value="Bed and sofa included" {{ in_array('Bed and sofa included', old('furnished_property', optional($proparty)->furnished_property) ?: []) ? 'checked' : '' }}>
            Bed and sofa included
        </label>
        <label for="furnished_property_kitchen_items_are_included" class="checkbox-inline">
            <input id="furnished_property_kitchen_items_are_included" class="required" name="furnished_property[]" type="checkbox" value="Kitchen Items are included" {{ in_array('Kitchen Items are included', old('furnished_property', optional($proparty)->furnished_property) ?: []) ? 'checked' : '' }}>
            Kitchen Items are included
        </label>

        {!! $errors->first('furnished_property', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('accessability') ? 'has-error' : '' }}">
    <label for="accessability" class="col-md-2 control-label">Accessability</label>
    <div class="col-md-10">
        <label for="accessability_ground_floor_access" class="checkbox-inline">
            <input id="accessability_ground_floor_access" class="required" name="accessability[]" type="checkbox" value="Ground floor Access" {{ in_array('Ground floor Access', old('accessability', optional($proparty)->accessability) ?: []) ? 'checked' : '' }}>
            Ground floor Access
        </label>
        <label for="accessability_seperate_enterance" class="checkbox-inline">
            <input id="accessability_seperate_enterance" class="required" name="accessability[]" type="checkbox" value="Seperate Enterance" {{ in_array('Seperate Enterance', old('accessability', optional($proparty)->accessability) ?: []) ? 'checked' : '' }}>
            Seperate Enterance
        </label>
        <label for="accessability_shared_corridor" class="checkbox-inline">
            <input id="accessability_shared_corridor" class="required" name="accessability[]" type="checkbox" value="Shared corridor" {{ in_array('Shared corridor', old('accessability', optional($proparty)->accessability) ?: []) ? 'checked' : '' }}>
            Shared corridor
        </label>

        {!! $errors->first('accessability', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('heating_type') ? 'has-error' : '' }}">
    <label for="heating_type" class="col-md-2 control-label">Heating Type</label>
    <div class="col-md-10">
        <label for="heating_type_central" class="checkbox-inline">
            <input id="heating_type_central" class="required" name="heating_type[]" type="checkbox" value="Central" {{ in_array('Central', old('heating_type', optional($proparty)->heating_type) ?: []) ? 'checked' : '' }}>
            Central
        </label>
        <label for="heating_type_gas" class="checkbox-inline">
            <input id="heating_type_gas" class="required" name="heating_type[]" type="checkbox" value="Gas" {{ in_array('Gas', old('heating_type', optional($proparty)->heating_type) ?: []) ? 'checked' : '' }}>
            Gas
        </label>
        <label for="heating_type_combi_boilder" class="checkbox-inline">
            <input id="heating_type_combi_boilder" class="required" name="heating_type[]" type="checkbox" value="Combi Boilder" {{ in_array('Combi Boilder', old('heating_type', optional($proparty)->heating_type) ?: []) ? 'checked' : '' }}>
            Combi Boilder
        </label>

        {!! $errors->first('heating_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_burglar_alarm') ? 'has-error' : '' }}">
    <label for="is_burglar_alarm" class="col-md-2 control-label">Is Burglar Alarm</label>
    <div class="col-md-10">
        <label for="is_burglar_alarm_1" class="checkbox-inline">
            <input id="is_burglar_alarm_1" class="" name="is_burglar_alarm" type="checkbox" value="1" {{ old('is_burglar_alarm', optional($proparty)->is_burglar_alarm) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('is_burglar_alarm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_cctv') ? 'has-error' : '' }}">
    <label for="is_cctv" class="col-md-2 control-label">Is CCTV</label>
    <div class="col-md-10">
        <label for="is_cctv_1" class="checkbox-inline">
            <input id="is_cctv_1" class="" name="is_cctv" type="checkbox" value="1" {{ old('is_cctv', optional($proparty)->is_cctv) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('is_cctv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('bill') ? 'has-error' : '' }}">
    <label for="bill" class="col-md-2 control-label">Bill</label>
    <div class="col-md-10">
        <select class="form-control" id="bill" name="bill">
        	    
        	@foreach (['Included' => 'Included',
'Excluded' => 'Excluded',
'Shared' => 'Shared'] as $key => $text)
			    <option value="{{ $key }}" {{ old('bill', optional($proparty)->bill) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('bill', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('enquiry_contact') ? 'has-error' : '' }}">
    <label for="enquiry_contact" class="col-md-2 control-label">Property Enquiry Contact</label>
    <div class="col-md-10">
        <input class="form-control" name="enquiry_contact" type="text" id="enquiry_contact" value="{{ old('enquiry_contact', optional($proparty)->enquiry_contact) }}" minlength="1" placeholder="Enter property enquiry contact here...">
        {!! $errors->first('enquiry_contact', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('enquiry_email') ? 'has-error' : '' }}">
    <label for="enquiry_email" class="col-md-2 control-label">Property Enquiry Email</label>
    <div class="col-md-10">
        <input class="form-control" name="enquiry_email" type="email" id="enquiry_email" value="{{ old('enquiry_email', optional($proparty)->enquiry_email) }}" placeholder="Enter property enquiry contact here...">
        {!! $errors->first('enquiry_email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sale_condition') ? 'has-error' : '' }}">
    <label for="sale_condition" class="col-md-2 control-label">Sale Condition</label>
    <div class="col-md-10">
        <textarea class="form-control" name="sale_condition" cols="50" rows="10" id="sale_condition" minlength="1" placeholder="Enter sale condition here...">{{ old('sale_condition', optional($proparty)->sale_condition) }}</textarea>
        {!! $errors->first('sale_condition', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('rent_condition') ? 'has-error' : '' }}">
    <label for="rent_condition" class="col-md-2 control-label">Rent Condition</label>
    <div class="col-md-10">
        <textarea class="form-control" name="rent_condition" cols="50" rows="10" id="rent_condition" minlength="1" placeholder="Enter rent condition here...">{{ old('rent_condition', optional($proparty)->rent_condition) }}</textarea>
        {!! $errors->first('rent_condition', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('property_details') ? 'has-error' : '' }}">
    <label for="property_details" class="col-md-2 control-label">Property Details</label>
    <div class="col-md-10">
        <textarea class="form-control" name="property_details" cols="50" rows="10" id="property_details" minlength="1" placeholder="Enter property details here...">{{ old('property_details', optional($proparty)->property_details) }}</textarea>
        {!! $errors->first('property_details', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('property_details_display') ? 'has-error' : '' }}">
    <label for="property_details_display" class="col-md-2 control-label">Property Details Display</label>
    <div class="col-md-10">
        <textarea class="form-control" name="property_details_display" cols="50" rows="10" id="property_details_display" minlength="1" placeholder="Enter property details display here...">{{ old('property_details_display', optional($proparty)->property_details_display) }}</textarea>
        {!! $errors->first('property_details_display', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('no_of_bedrooms') ? 'has-error' : '' }}">
    <label for="no_of_bedrooms" class="col-md-2 control-label">NO of Bedrooms</label>
    <div class="col-md-10">
        <input class="form-control" name="no_of_bedrooms" type="number" id="no_of_bedrooms" value="{{ old('no_of_bedrooms', optional($proparty)->no_of_bedrooms) }}" min="-2147483648" max="2147483647" placeholder="Enter no of bedrooms here...">
        {!! $errors->first('no_of_bedrooms', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('no_of_halls') ? 'has-error' : '' }}">
    <label for="no_of_halls" class="col-md-2 control-label">NO of Halls</label>
    <div class="col-md-10">
        <input class="form-control" name="no_of_halls" type="number" id="no_of_halls" value="{{ old('no_of_halls', optional($proparty)->no_of_halls) }}" min="-2147483648" max="2147483647" placeholder="Enter no of halls here...">
        {!! $errors->first('no_of_halls', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('no_of_reseptions') ? 'has-error' : '' }}">
    <label for="no_of_reseptions" class="col-md-2 control-label">NO of Reseptions</label>
    <div class="col-md-10">
        <input class="form-control" name="no_of_reseptions" type="number" id="no_of_reseptions" value="{{ old('no_of_reseptions', optional($proparty)->no_of_reseptions) }}" min="-2147483648" max="2147483647" placeholder="Enter no of reseptions here...">
        {!! $errors->first('no_of_reseptions', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('floors') ? 'has-error' : '' }}">
    <label for="floors" class="col-md-2 control-label">Floors</label>
    <div class="col-md-10">
        <input class="form-control" name="floors" type="number" id="floors" value="{{ old('floors', optional($proparty)->floors) }}" min="-2147483648" max="2147483647" placeholder="Enter floors here...">
        {!! $errors->first('floors', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('parking') ? 'has-error' : '' }}">
    <label for="parking" class="col-md-2 control-label">Parking</label>
    <div class="col-md-10">
        <label for="parking_allocated" class="checkbox-inline">
            <input id="parking_allocated" class="required" name="parking[]" type="checkbox" value="Allocated" {{ in_array('Allocated', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            Allocated
        </label>
        <label for="parking_garage" class="checkbox-inline">
            <input id="parking_garage" class="required" name="parking[]" type="checkbox" value="Garage" {{ in_array('Garage', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            Garage
        </label>
        <label for="parking_driveway" class="checkbox-inline">
            <input id="parking_driveway" class="required" name="parking[]" type="checkbox" value="Driveway" {{ in_array('Driveway', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            Driveway
        </label>
        <label for="parking_gated" class="checkbox-inline">
            <input id="parking_gated" class="required" name="parking[]" type="checkbox" value="Gated" {{ in_array('Gated', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            Gated
        </label>
        <label for="parking_off_street" class="checkbox-inline">
            <input id="parking_off_street" class="required" name="parking[]" type="checkbox" value="Off Street" {{ in_array('Off Street', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            Off Street
        </label>
        <label for="parking_on_street" class="checkbox-inline">
            <input id="parking_on_street" class="required" name="parking[]" type="checkbox" value="On Street" {{ in_array('On Street', old('parking', optional($proparty)->parking) ?: []) ? 'checked' : '' }}>
            On Street
        </label>

        {!! $errors->first('parking', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('garden') ? 'has-error' : '' }}">
    <label for="garden" class="col-md-2 control-label">Garden</label>
    <div class="col-md-10">
        <label for="garden_back_garden" class="checkbox-inline">
            <input id="garden_back_garden" class="required" name="garden[]" type="checkbox" value="Back Garden" {{ in_array('Back Garden', old('garden', optional($proparty)->garden) ?: []) ? 'checked' : '' }}>
            Back Garden
        </label>
        <label for="garden_front_garden" class="checkbox-inline">
            <input id="garden_front_garden" class="required" name="garden[]" type="checkbox" value="Front Garden" {{ in_array('Front Garden', old('garden', optional($proparty)->garden) ?: []) ? 'checked' : '' }}>
            Front Garden
        </label>
        <label for="garden_communal_garden" class="checkbox-inline">
            <input id="garden_communal_garden" class="required" name="garden[]" type="checkbox" value="Communal Garden" {{ in_array('Communal Garden', old('garden', optional($proparty)->garden) ?: []) ? 'checked' : '' }}>
            Communal Garden
        </label>
        <label for="garden_terrace" class="checkbox-inline">
            <input id="garden_terrace" class="required" name="garden[]" type="checkbox" value="Terrace" {{ in_array('Terrace', old('garden', optional($proparty)->garden) ?: []) ? 'checked' : '' }}>
            Terrace
        </label>

        {!! $errors->first('garden', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('internal_area') ? 'has-error' : '' }}">
    <label for="internal_area" class="col-md-2 control-label">Internal Area</label>
    <div class="col-md-10">
        <input class="form-control" name="internal_area" type="text" id="internal_area" value="{{ old('internal_area', optional($proparty)->internal_area) }}" minlength="1" placeholder="Enter measurement of internal area here...">
        {!! $errors->first('internal_area', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('land_area') ? 'has-error' : '' }}">
    <label for="land_area" class="col-md-2 control-label">Land Area</label>
    <div class="col-md-10">
        <input class="form-control" name="land_area" type="text" id="land_area" value="{{ old('land_area', optional($proparty)->land_area) }}" minlength="1" placeholder="Enter measurement of land area here...">
        {!! $errors->first('land_area', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    <label for="price" class="col-md-2 control-label">Price</label>
    <div class="col-md-10">
        <input class="form-control" name="price" type="number" id="price" value="{{ old('price', optional($proparty)->price) }}" min="-2147483648" max="2147483647" placeholder="Enter price here...">
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price_flag') ? 'has-error' : '' }}">
    <label for="price_flag" class="col-md-2 control-label">Price Flag</label>
    <div class="col-md-10">
        <label for="price_flag_1" class="checkbox-inline">
            <input id="price_flag_1" class="" name="price_flag" type="checkbox" value="1" {{ old('price_flag', optional($proparty)->price_flag) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('price_flag', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('rent_frequency') ? 'has-error' : '' }}">
    <label for="rent_frequency" class="col-md-2 control-label">Rent Frequency</label>
    <div class="col-md-10">
        <select class="form-control" id="rent_frequency" name="rent_frequency">
        	    
        	@foreach (['Monthly' => 'Monthly',
'Quarter' => 'Quarter',
'Half' => 'Half',
'Annual' => 'Annual'] as $key => $text)
			    <option value="{{ $key }}" {{ old('rent_frequency', optional($proparty)->rent_frequency) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('rent_frequency', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('deposite') ? 'has-error' : '' }}">
    <label for="deposite" class="col-md-2 control-label">Deposite Minimum</label>
    <div class="col-md-10">
        <input class="form-control" name="deposite" type="number" id="deposite" value="{{ old('deposite', optional($proparty)->deposite) }}" min="-2147483648" max="2147483647" placeholder="Enter deposite here...">
        {!! $errors->first('deposite', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('deposite_flag') ? 'has-error' : '' }}">
    <label for="deposite_flag" class="col-md-2 control-label">Deposite Flag</label>
    <div class="col-md-10">
        <label for="deposite_flag_1" class="checkbox-inline">
            <input id="deposite_flag_1" class="" name="deposite_flag" type="checkbox" value="1" {{ old('deposite_flag', optional($proparty)->deposite_flag) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('deposite_flag', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('admin_fee_max') ? 'has-error' : '' }}">
    <label for="admin_fee_max" class="col-md-2 control-label">Admin Fee Maxmimum</label>
    <div class="col-md-10">
        <input class="form-control" name="admin_fee_max" type="number" id="admin_fee_max" value="{{ old('admin_fee_max', optional($proparty)->admin_fee_max) }}" min="-2147483648" max="2147483647" placeholder="Enter admin fee maximum here...">
        {!! $errors->first('admin_fee_max', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('admin_fee_exe') ? 'has-error' : '' }}">
    <label for="admin_fee_exe" class="col-md-2 control-label">Admin Fee Exemption</label>
    <div class="col-md-10">
        <input class="form-control" name="admin_fee_exe" type="number" id="admin_fee_exe" value="{{ old('admin_fee_exe', optional($proparty)->admin_fee_exe) }}" min="-2147483648" max="2147483647" placeholder="Enter admin fee exemption here...">
        {!! $errors->first('admin_fee_exe', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('admin_fee_flag') ? 'has-error' : '' }}">
    <label for="admin_fee_flag" class="col-md-2 control-label">Admin Fee Flag</label>
    <div class="col-md-10">
        <label for="admin_fee_flag_1" class="checkbox-inline">
            <input id="admin_fee_flag_1" class="" name="admin_fee_flag" type="checkbox" value="1" {{ old('admin_fee_flag', optional($proparty)->admin_fee_flag) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('admin_fee_flag', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_intake') ? 'has-error' : '' }}">
    <label for="date_intake" class="col-md-2 control-label">date Intake</label>
    <div class="col-md-10">
        <input class="form-control" name="date_intake" type="date" id="date_intake" value="{{ old('date_intake', optional($proparty)->date_intake) }}" placeholder="Enter date intake here...">
        {!! $errors->first('date_intake', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_published') ? 'has-error' : '' }}">
    <label for="date_published" class="col-md-2 control-label">date Published</label>
    <div class="col-md-10">
        <input class="form-control" name="date_published" type="date" id="date_published" value="{{ old('date_published', optional($proparty)->date_published) }}" placeholder="Enter date published here...">
        {!! $errors->first('date_published', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_revoked') ? 'has-error' : '' }}">
    <label for="date_revoked" class="col-md-2 control-label">date Revoked</label>
    <div class="col-md-10">
        <input class="form-control" name="date_revoked" type="date" id="date_revoked" value="{{ old('date_revoked', optional($proparty)->date_revoked) }}" placeholder="Enter date revoked here...">
        {!! $errors->first('date_revoked', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('owner') ? 'has-error' : '' }}">
    <label for="owner" class="col-md-2 control-label">Owner</label>
    <div class="col-md-10">
        <input class="form-control" name="owner" type="text" id="owner" value="{{ old('owner', optional($proparty)->owner) }}" minlength="1" placeholder="Enter owner here...">
        {!! $errors->first('owner', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_publish') ? 'has-error' : '' }}">
    <label for="is_publish" class="col-md-2 control-label">Is Publish</label>
    <div class="col-md-10">
        <label for="is_publish_1" class="checkbox-inline">
            <input id="is_publish_1" class="" name="is_publish" type="checkbox" value="1" {{ old('is_publish', optional($proparty)->is_publish) == '1' ? 'checked' : '' }}>
            Yes
        </label>

        {!! $errors->first('is_publish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

