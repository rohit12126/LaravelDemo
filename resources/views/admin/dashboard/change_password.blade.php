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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('global.head.setting')</a></li>
          </ol>
      </div>
  </div>
        <!-- row -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('global.head.setting')</h4>
                    <div class="basic-form">
                        <form class="mt-5 mb-5" id="changePasswordForm" action="{{ route('updatePassword') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.change_password.password') <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <input type="password" name="password" id="password" class="form-control" placeholder="@lang('global.change_password.passwordPlaceholder')" value="" maxlength='200' >
                                    @if($errors->has('password'))
                                      <p class="error">
                                          {{ $errors->first('password') }}
                                      </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.change_password.confirmPassword')  <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <input type="password" name="password_confirmation" id="password_confirmation"  class="form-control" placeholder="@lang('global.change_password.confirmPasswordPlaceholder')" value="" maxlength='200'>
                                   @if($errors->has('password_confirmation'))
                                      <p class="error">
                                          {{ $errors->first('password_confirmation') }}
                                      </p>
                                   @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button data-toggle="tooltip" data-placement="top" title="@lang('global.change_password.updateBtnTooltip')"  type="submit" class="btn btn-dark">@lang('global.change_password.updateBtn')</button>
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
