@extends('layouts.adminlayout')
@section('pagetitle', 'Properties')
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
                            <span class="glyphicon glyphicon-ok"></span>
                            {!! session('success_message') !!}

                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    @endif
                    </div>
                    <div class="float-right">
                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <a href="{{ route('proparties.proparty.create') }}" class="btn btn-success"
                                title="Create New Proparty">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="panel panel-default">
                        @if(count($proparties) == 0)
                            <div class="panel-body text-center">
                                <h4>No Proparties Available.</h4>
                            </div>
                        @else
                        <div class="panel-body panel-body-with-table">
                            <div class="table-responsive">

                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Actions</th>
                                            <th>Catagery</th>
                                            <th>Property Type</th>
                                            <th>Property Age</th>
                                            <th>Minimum Term</th>
                                            <th>Door No</th>
                                            <th>Door Name</th>
                                            <th>First Postcode</th>
                                            <th>Second Postcode</th>
                                            <th>Post Town</th>
                                            <th>Post City</th>
                                            <th>Post Country</th>
                                            <th>Display Address</th>
                                            <th>Condition of Property</th>
                                            <th>Furnished Property</th>
                                            <th>Accessability</th>
                                            <th>Heating Type</th>
                                            <th>Is Burglar Alarm</th>
                                            <th>Is CCTV</th>
                                            <th>Bill</th>
                                            <th>Property Enquiry Contact</th>
                                            <th>Property Enquiry Email</th>
                                            <th>Sale Condition</th>
                                            <th>Rent Condition</th>
                                            <th>Property Details</th>
                                            <th>Property Details Display</th>
                                            <th>NO of Bedrooms</th>
                                            <th>NO of Halls</th>
                                            <th>NO of Reseptions</th>
                                            <th>Floors</th>
                                            <th>Parking</th>
                                            <th>Garden</th>
                                            <th>Internal Area</th>
                                            <th>Land Area</th>
                                            <th>Price</th>
                                            <th>Price Flag</th>
                                            <th>Rent Frequency</th>
                                            <th>Deposite Minimum</th>
                                            <th>Deposite Flag</th>
                                            <th>Admin Fee Maxmimum</th>
                                            <th>Admin Fee Exemption</th>
                                            <th>Admin Fee Flag</th>
                                            <th>date Intake</th>
                                            <th>date Published</th>
                                            <th>date Revoked</th>
                                            <th>Owner</th>
                                            <th>Is Publish</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($proparties as $proparty)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <form method="POST" action="{!! route('proparties.proparty.destroy', $proparty->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                        <a href="{{ route('proparties.proparty.show', $proparty->id ) }}" class="btn btn-info" title="Show Proparty">
                                                            <span class="fa fa-caret-square-o-up" aria-hidden="true"></span>
                                                        </a>
                                                        <a href="{{ route('proparties.proparty.edit', $proparty->id ) }}" class="btn btn-primary" title="Edit Proparty">
                                                            <span class="fa fa-pencil-alt" aria-hidden="true"></span>
                                                        </a>

                                                        <button type="submit" class="btn btn-danger" title="Delete Proparty" onclick="return confirm(&quot;Click Ok to delete Proparty.&quot;)">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>{{ $proparty->catagery }}</td>
                                            <td>{{ optional($proparty->propertytype)->type_name }}</td>
                                            <td>{{ $proparty->age }}</td>
                                            <td>{{ $proparty->minimum_term }}</td>
                                            <td>{{ $proparty->door_no }}</td>
                                            <td>{{ $proparty->door_name }}</td>
                                            <td>{{ $proparty->first_pastcode }}</td>
                                            <td>{{ $proparty->second_pastcode }}</td>
                                            <td>{{ $proparty->post_town }}</td>
                                            <td>{{ $proparty->post_city }}</td>
                                            <td>{{ $proparty->post_country }}</td>
                                            <td>{{ $proparty->display_address }}</td>
                                            <td>{{ $proparty->condition_of_property }}</td>
                                            <td>{{ implode(', ', $proparty->furnished_property) }}</td>
                                            <td>{{ implode('; ', $proparty->accessability) }}</td>
                                            <td>{{ implode('; ', $proparty->heating_type) }}</td>
                                            <td>{{ ($proparty->is_burglar_alarm) ? 'Yes' : 'No' }}</td>
                                            <td>{{ ($proparty->is_cctv) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $proparty->bill }}</td>
                                            <td>{{ $proparty->enquiry_contact }}</td>
                                            <td>{{ $proparty->enquiry_email }}</td>
                                            <td>{{ $proparty->sale_condition }}</td>
                                            <td>{{ $proparty->rent_condition }}</td>
                                            <td>{{ $proparty->property_details }}</td>
                                            <td>{{ $proparty->property_details_display }}</td>
                                            <td>{{ $proparty->no_of_bedrooms }}</td>
                                            <td>{{ $proparty->no_of_halls }}</td>
                                            <td>{{ $proparty->no_of_reseptions }}</td>
                                            <td>{{ $proparty->floors }}</td>
                                            <td>{{ implode(', ', $proparty->parking) }}</td>
                                            <td>{{ implode(', ', $proparty->garden) }}</td>
                                            <td>{{ $proparty->internal_area }}</td>
                                            <td>{{ $proparty->land_area }}</td>
                                            <td>{{ $proparty->price }}</td>
                                            <td>{{ ($proparty->price_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $proparty->rent_frequency }}</td>
                                            <td>{{ $proparty->deposite }}</td>
                                            <td>{{ ($proparty->deposite_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $proparty->admin_fee_max }}</td>
                                            <td>{{ $proparty->admin_fee_exe }}</td>
                                            <td>{{ ($proparty->admin_fee_flag) ? 'Yes' : 'No' }}</td>
                                            <td>{{ $proparty->date_intake }}</td>
                                            <td>{{ $proparty->date_published }}</td>
                                            <td>{{ $proparty->date_revoked }}</td>
                                            <td>{{ $proparty->owner }}</td>
                                            <td>{{ ($proparty->is_publish) ? 'Yes' : 'No' }}</td>

                                            
                                        </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="panel-footer">
                            {!! $proparties->render() !!}
                        </div>
                        
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection