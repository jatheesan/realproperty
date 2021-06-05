@extends('layouts.adminlayout')
@section('pagetitle', 'Images')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <div class="panel panel-default">
                    @if(count($images) == 0)
                        <div class="panel-body text-center">
                            <h4>No Images Available.</h4>
                        </div>
                    @else
                    <div class="panel-body panel-body-with-table">
                        <div class="row">
                            <div class="card-group">
                                @foreach($images as $multi)
                                    <div class="col-md-4 mt-5">
                                        <div class="card">
                                            <img src="{{asset($multi->image)}}" alt="">
                                        </div>
                                    </div>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        {{ $images->links("pagination::bootstrap-4") }}
                        {{--!! $images->render() !!--}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
