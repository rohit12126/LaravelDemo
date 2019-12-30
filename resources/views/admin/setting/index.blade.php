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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('global.setting.tab')</a></li>
          </ol>
      </div>
  </div>
        <!-- row -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('global.setting.tab')</h4>
                    <div class="basic-form">
                        <form class="mt-5 mb-5" id="adminProfileForm" action="{{ route('setting.save') }}" method="post" autocomplete="off">
                            @csrf

                          @foreach ($settings as $setting)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                  @switch($setting->setting_id)
                                    @case(1)
                                        @lang('global.setting.email')
                                        @break
                                    @case(2)
                                        @lang('global.setting.support_email')
                                        @break
                                    @case(3)
                                        @lang('global.setting.address')
                                        @break
                                    @case(4)
                                        @lang('global.setting.website')
                                        @break
                                    @case(5)
                                        @lang('global.setting.phone')
                                        @break
                                    @default
                                        @lang('global.setting.ud')
                                  @endswitch
                                </label>
                                <div class="col-sm-10">
                                  <input type="text" name="setting_name[]" class="form-control" placeholder="@lang('global.admin_profile.namePlaceholder')" value="{{ $setting->setting_value}}"  >
                                  <input type="hidden" name="ids[]" value="{{ $setting->setting_id}}">
                                </div>
                            </div>
                          @endforeach
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <button data-toggle="tooltip" data-placement="top" title="@lang('global.setting.submitBtnTooltip')"  type="submit" class="btn btn-dark">@lang('global.setting.submit')</button>
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
