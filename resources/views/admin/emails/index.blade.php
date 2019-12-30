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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('global.email.tab')</a></li>
          </ol>
      </div>
  </div>
        <!-- row -->
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                  <div class="pull-left">
                                    <h4>@lang('global.email.tab')</h4>
                                  </div>
                                  <div class="pull-right">
                                    <a href="{{ url('/email/create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('global.email.addBtnTooltip')" > @lang('global.email.addBtn')</a>
                                  </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="email_data" class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                              <th></th>
                                              <th>@lang('global.email.name')</th>
                                              <th>@lang('global.email.parent_catergory')</th>
                                              <th>@lang('global.email.created_at')</th>
                                              <th>@lang('global.email.action')</th>
                                            </tr>
                                        </thead>
                                    </table>
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
@section('javascript')
<script type="text/javascript">
  
$(document).ready(function() {
    /*$('#email_data').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('getCategoriesData') }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',"searchable": false,"orderable":false},
            {data: 'photo_thumb', name: 'photo_thumb'},
            {data: 'category_name', name: 'category_name'},
            {data: 'parent_category_name', name: 'parent_category_name'},
            {data: 'on_homepage', name: 'on_homepage'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'},
        ]
    });*/
});
</script>
@endsection