@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="float-right">
        <form method="POST" action="{!! route('proparties.proparty.destroy', $proparty->id) !!}"
            accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('proparties.proparty.index') }}" class="btn btn-primary"
                    title="Show All Proparty Type">
                    <span class="fa fa-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparties.proparty.create') }}" class="btn btn-success"
                    title="Create New Proparty Type">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>

                <a href="{{ route('proparties.proparty.edit', $proparty->id ) }}" class="btn btn-primary"
                    title="Edit Proparty Type">
                    <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                </a>

                <button type="submit" class="btn btn-danger" title="Delete Proparty" onclick="return confirm(&quot;Click Ok to delete Proparty.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
            </div>
        </form>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <span class="float-left">
                    <h2 style="color:#ff9933;">
                        {{ isset($title) ? $title : 'Proparty' }}
                    </h2>
                </span>  
            </div>
            <!-- Card Body -->
            <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <dl class="dl-horizontal">
                                <dt>Catagery</dt>
                                <dd>{{ $proparty->catagery }}</dd>
                                <dt>Property Type</dt>
                                <dd>{{ optional($proparty->propertytype)->type_name }}</dd>
                                <dt>Property Age</dt>
                                <dd>{{ $proparty->age }}</dd>
                                <dt>Minimum Term</dt>
                                <dd>{{ $proparty->minimum_term }}</dd>
                                <dt>Door No</dt>
                                <dd>{{ $proparty->door_no }}</dd>
                                <dt>Door Name</dt>
                                <dd>{{ $proparty->door_name }}</dd>
                                <dt>First Postcode</dt>
                                <dd>{{ $proparty->first_pastcode }}</dd>
                                <dt>Second Postcode</dt>
                                <dd>{{ $proparty->second_pastcode }}</dd>
                                <dt>Post Town</dt>
                                <dd>{{ $proparty->post_town }}</dd>
                                <dt>Post City</dt>
                                <dd>{{ $proparty->post_city }}</dd>
                                <dt>Post Country</dt>
                                <dd>{{ $proparty->post_country }}</dd>
                                <dt>Display Address</dt>
                                <dd>{{ $proparty->display_address }}</dd>
                                <dt>Condition of Property</dt>
                                <dd>{{ $proparty->condition_of_property }}</dd>
                                <dt>Furnished Property</dt>
                                <dd>{{ implode(', ', $proparty->furnished_property) }}</dd>
                                <dt>Accessability</dt>
                                <dd>{{ implode('; ', $proparty->accessability) }}</dd>
                                <dt>Heating Type</dt>
                                <dd>{{ implode('; ', $proparty->heating_type) }}</dd>
                                <dt>Is Burglar Alarm</dt>
                                <dd>{{ ($proparty->is_burglar_alarm) ? 'Yes' : 'No' }}</dd>
                                <dt>Is CCTV</dt>
                                <dd>{{ ($proparty->is_cctv) ? 'Yes' : 'No' }}</dd>
                                <dt>Bill</dt>
                                <dd>{{ $proparty->bill }}</dd>
                                <dt>Property Enquiry Contact</dt>
                                <dd>{{ $proparty->enquiry_contact }}</dd>
                                <dt>Property Enquiry Email</dt>
                                <dd>{{ $proparty->enquiry_email }}</dd>
                                <dt>Sale Condition</dt>
                                <dd>{{ $proparty->sale_condition }}</dd>
                                <dt>Rent Condition</dt>
                                <dd>{{ $proparty->rent_condition }}</dd>
                                <dt>Property Details</dt>
                                <dd>{{ $proparty->property_details }}</dd>
                                <dt>Property Details Display</dt>
                                <dd>{{ $proparty->property_details_display }}</dd>
                                <dt>NO of Bedrooms</dt>
                                <dd>{{ $proparty->no_of_bedrooms }}</dd>
                                <dt>NO of Halls</dt>
                                <dd>{{ $proparty->no_of_halls }}</dd>
                                <dt>NO of Reseptions</dt>
                                <dd>{{ $proparty->no_of_reseptions }}</dd>
                                <dt>Floors</dt>
                                <dd>{{ $proparty->floors }}</dd>
                                <dt>Parking</dt>
                                <dd>{{ implode(', ', $proparty->parking) }}</dd>
                                <dt>Garden</dt>
                                <dd>{{ implode(', ', $proparty->garden) }}</dd>
                                <dt>Internal Area</dt>
                                <dd>{{ $proparty->internal_area }}</dd>
                                <dt>Land Area</dt>
                                <dd>{{ $proparty->land_area }}</dd>
                                <dt>Price</dt>
                                <dd>{{ $proparty->price }}</dd>
                                <dt>Price Flag</dt>
                                <dd>{{ ($proparty->price_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>Rent Frequency</dt>
                                <dd>{{ $proparty->rent_frequency }}</dd>
                                <dt>Deposite Minimum</dt>
                                <dd>{{ $proparty->deposite }}</dd>
                                <dt>Deposite Flag</dt>
                                <dd>{{ ($proparty->deposite_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>Admin Fee Maxmimum</dt>
                                <dd>{{ $proparty->admin_fee_max }}</dd>
                                <dt>Admin Fee Exemption</dt>
                                <dd>{{ $proparty->admin_fee_exe }}</dd>
                                <dt>Admin Fee Flag</dt>
                                <dd>{{ ($proparty->admin_fee_flag) ? 'Yes' : 'No' }}</dd>
                                <dt>date Intake</dt>
                                <dd>{{ $proparty->date_intake }}</dd>
                                <dt>date Published</dt>
                                <dd>{{ $proparty->date_published }}</dd>
                                <dt>date Revoked</dt>
                                <dd>{{ $proparty->date_revoked }}</dd>
                                <dt>Owner</dt>
                                <dd>{{ $proparty->owner }}</dd>
                                <dt>Is Publish</dt>
                                <dd>{{ ($proparty->is_publish) ? 'Yes' : 'No' }}</dd>
                            </dl>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection