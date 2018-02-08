@extends('layouts.app')

@section('content')

<div class="container">


    <div class="page-content-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-md-12">


                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                ADD Category

                            </div>

                        </div>

                        <div class="portlet-body form">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('storecategory') }}" method="post" name="form_data" id="form_data"  class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-body">





                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name <span class="required">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>

                             <div class="col-md-offset-3 col-md-3" style="margin-bottom: 10px;">

                                <button type="submit" class="btn btn-success">Submit</button>
                                <a  href="{{ route('allcategories') }}" class="btn btn-info"  > Cancel</a>
                            </div>

                        </form>

                    </div>




                </div>

            </div>

        </div>
    </div>

</div>

</div>
@endsection

