@extends('backend.layouts.master')
@section('css_after')

    <link rel="stylesheet" href="{{asset('backend/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/plugins/dropzone/dist/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/js/plugins/flatpickr/flatpickr.min.css')}}">

@endsection
@section('page_action')
    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-alt">
            <li class="breadcrumb-item"><a class="link-fx" href="{{ url('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a class="link-fx" href="{{ url('asset/') }}">Assets</a></li>
            <li class="breadcrumb-item">Edit</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="content">
        @include('backend.layouts.error_msg')
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Edit Asset</h3>
            </div>

            <form class="js-validation" id='form' action='{{ url('asset/' . $asset->id . '/update')}}' method="POST">
                @csrf
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="row items-push ml-10">
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="val-username">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"   placeholder="Enter a name.." value="{{$asset->name}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Asset type <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-control" id="type_id" name="type_id" style="width: 100%;" data-placeholder="Choose Asset type.." required>
                                            <option></option>
                                            @foreach ($asset_type as $type)
                                                <option value='{{ $type->id }}' style="color:black" @if($asset->type_id==$type->id) selected @endif> {{ $type->name }} </option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Sl_no </label>
                                    <input type="number" class="form-control" id="sl_no" name="sl_no" @if($asset->sl_no) value="{{$asset->sl_no}}" @endif  placeholder="Enter a sl_no.." >
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Branch<span class="text-danger">*</span></label>
                                        <select class="js-select2 form-control" id="branch_id" name="branch_id" style="width: 100%;" data-placeholder="Choose branch.." required>
                                            <option></option>
                                            @foreach ($branches as $branch)
                                                <option value='{{ $branch->id }}' style="color:black" @if($asset->branch_id==$branch->id) selected @endif> {{ $branch->name }} </option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Image</label><br>
                                    <input type="file"  id="url" name="url">
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Specification </label>
                                    <input type="text" class="form-control" id="specification" name="specification"  @if($asset->specification) value="{{$asset->specification}}" @endif  placeholder="Enter specification.." >
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Vendor </label>
                                    <input type="text" class="form-control" id="purchase_at" name="purchase_at" @if($asset->purchase_at) value="{{$asset->purchase_at}}" @endif  placeholder="Enter vendor.." >
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Purchase By</label>
                                        <select class="js-select2 form-control" id="purchase_by" name="purchase_by" style="width: 100%;" data-placeholder="Enter who purchased.." >
                                            <option></option>
                                            @foreach ($users as $user)
                                                <option value='{{ $user->id }}' style="color:black" @if($asset->purchase_by==$user->id) selected @endif> {{ $user->full_name }} </option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="val-username">Purchase Price </label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="purchase_price" name="purchase_price" @if($asset->purchase_price) value="{{$asset->purchase_price}}" @endif   placeholder="Enter purchased price.." >
                                </div>
                            </div>
                        </div>
                        <!-- END Regular -->

                        <!-- Submit -->
                        <div class="row items-push">
                            <div class="col-lg-7 offset-lg-4">
                                <button type="submit" class="btn btn-alt-primary">Update</button>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </form>
            <!-- jQuery Validation -->
        </div>
        <!-- END Dynamic Table with Export Buttons -->
    </div>
@endsection


@section('js_after')

    <script src="{{ asset('backend/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/jquery-validation/additional-methods.js') }}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('backend/js/pages/be_forms_validation.min.js') }}"></script>
    <!-- Page JS Plugins -->

    <script src="{{asset('backend/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('backend/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>jQuery(function(){One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);});</script>


@endsection
