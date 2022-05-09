@include('admin/header')
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="{{url('/')}}">
                <img alt="Logo" src="{{url('/')}}/assets/media/logos/logo-light.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            @include('admin/sidebar')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                @include('admin/top-header')
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">



                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                        <!--Begin::Dashboard 1-->

                        <!--Begin::Row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Edit Artist
                                            </h3>
                                        </div>
                                    </div>
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if (session('msg'))

                                    <div class="alert alert-danger alert-dismissible" id="success_message">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        <h4><i class="icon fa fa-check"></i> Congratulation </h4>
                                        {{ session('msg') }}
                                    </div> 
                                    @endif
                                    @foreach($records as $record)
                                    <form method="POST" action="{{ url('admin/edit-artist') }}" class="kt-form" enctype="multipart/form-data">
                                        <div class="kt-portlet__body">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $record->id }}">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ $record->name }}" required autocomplete="name" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lifespan') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="lifespan" value="{{ $record->lifespan }}">

                                                </div>
                                            </div>
                                            
                                            <!-- add new fields-->
                                                {{-- <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Description') }} <small>(SEO)</small></label>

                                                    <div class="col-md-6">
                                                        <input id="description_content" type="text" class="form-control" name="description_content" value="{{ $record->description_content }}">

                                                    </div>
                                                </div> --}}
                                                
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Biography') }} <small>(SEO)</small></label>

                                                    <div class="col-md-6">
                                                        <input id="biography" type="text" class="form-control" name="biography" value="{{ $record->biography }}">

                                                    </div>
                                                </div>
                                                <!-- end new fields -->

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                                <div class="col-md-6">
                                                    <textarea class="form-control" name="description" value="{{ old('description') }}">{{ $record->description }}</textarea>
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>
                                                <div class="col-md-6">
                                                    <select class="class="form-control" name="categories[]" id='myselect' multiple="multiple">
                                                    <option value="0">Select Category</option>
                                                    @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                    </select>   
                                                </div>
                                            </div>

                                            

                                        @endforeach

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Update') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--End::Row-->

                    </div>

                    <!-- end:: Content -->
                </div>


                <script>
                    $('#myselect').select2({
                      width: '100%',
                      placeholder: "Select an Option",
                      allowClear: true
                    });
                </script>
                
                @include('admin/footer')