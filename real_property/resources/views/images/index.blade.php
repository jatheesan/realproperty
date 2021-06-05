@extends('layouts.adminlayout')
@section('pagetitle', 'Property Images')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-xl-11 col-lg-11 col-sm-11">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        <span class="fa fa-ok"></span>
                        {!! session('success') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    @endif
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="panel panel-default">

                    <div class="panel-body panel-body-with-table">
                        <div class="row">
                            <div class="col-md-9">
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
                            <div class="col-md-3 mt-5">
                                <div class="card">
                                    <div class="card-header">
                                        Adding images for property {{ $pro_id }}
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('image.store')}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control form-control-user" name="property_id" type="hidden"
                                                    id="property_id" value="{{ $pro_id }}" min="0" max="4294967295"
                                                    required="true">
                                                <label for="">Propety Image</label>
                                                <input type="file" name="image[]" class="form-control form-control-user" multiple="">
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-org">Add Image</button>
                                        </form>

                                    </div>
                                </div>

                                <div class="card mt-5">
                                    <div class="card-header">
                                        Update main image for property {{ $pro_id }}
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if(isset($main))
                                                <div class="card">
                                                    <img src="{{asset($main->image)}}" alt="">
                                                </div>
                                            @endif
                                            @foreach($images as $multi)
                                            <div class="col-md-3 mt-1">
                                                {{--<div class="card">
                                                    <img src="{{asset($multi->image)}}" alt="">
                                                    <input type="image" src="{{asset($multi->image)}}" alt=""/>
                                                </div>
                                                <button style="background: url{{asset($multi->image)}};" ... />--}}

                                                <form action="{{route('image.update', $multi->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <input class="form-control form-control-user" name="property_id" type="hidden"
                                                    id="property_id" value="{{ $pro_id }}" min="0" max="4294967295"
                                                    required="true">
                                                    <button type="submit"><img src="{{asset($multi->image)}}" width="50px" height= "40px"></button>
                                                </form>
                                                
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mt-5">
                                    <div class="card-header">
                                        Delete property {{ $pro_id }}'s image
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @foreach($images as $multi)
                                            <div class="col-md-3 mt-1">

                                                <form action="{{route('image.delete', $multi->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <button type="submit"><img src="{{asset($multi->image)}}" width="50px" height= "40px"></button>
                                                </form>
                                                
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
