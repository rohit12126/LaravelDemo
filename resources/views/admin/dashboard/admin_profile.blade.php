@extends('layouts.admin_layout')

@section('content')
<!--**********************************
        Content body start
    ***********************************-->
 <div class="content-body">
  <div class="row page-titles mx-0">
      <div class="col p-md-0">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/behindthescreen') }}">@lang('global.menu.dashboard')</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('global.head.profile')</a></li>
          </ol>
      </div>
  </div>
        <!-- row -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('global.head.profile')</h4>
                    <div class="basic-form">
                        <form class="mt-5 mb-5" id="adminProfileForm" action="{{ route('updateAdminProfile') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.admin_profile.name') <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" id="name" class="form-control" placeholder="@lang('global.admin_profile.namePlaceholder')" value="{{ $admin->name}}" maxlength='200' >
                                    @if($errors->has('name'))
                                      <p class="error">
                                          {{ $errors->first('name') }}
                                      </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.admin_profile.email')  <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <input type="email" name="email" id="email"  class="form-control" placeholder="@lang('global.admin_profile.emailPlaceholder')" value="{{ $admin->email}}" maxlength='200'>
                                   @if($errors->has('email'))
                                      <p class="error">
                                          {{ $errors->first('email') }}
                                      </p>
                                   @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <button data-toggle="tooltip" data-placement="top" title="@lang('global.admin_profile.updateBtnTooltip')"  type="submit" class="btn btn-dark">@lang('global.admin_profile.updateBtn')</button>
                                    <a href="{{url('/')}}" class="btn btn-danger">@lang('global.cancleBtn')</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
  <!-- #/ container -->
</div>

    <!--**********************************
        Content body end
    ***********************************-->
@endsection
