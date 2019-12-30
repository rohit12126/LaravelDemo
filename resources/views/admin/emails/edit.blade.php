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
              <li class="breadcrumb-item"><a href="{{ url('/category') }}">@lang('global.category.tab')</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">@lang('global.category.editBtn')</a></li>
          </ol>
      </div>
  </div>
        <!-- row -->
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('global.category.editBtn')</h4>
                    <div class="basic-form">
                        <form class="mt-5 mb-5" id="adminProfileForm" action="{{ route('category.update',$categoryData->category_id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                          {{method_field('PATCH')}}
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.category.parent_catergory')</label>
                                <div class="col-sm-10">
                                  <select name="parent_category_id" id="parent_category_id" class="form-control">
                                    <option value="0">@lang("global.category.parent_catergory_select_text")</option>
                                    @php echo $categories; @endphp
                                  </select>
                                    @if($errors->has('category_name'))
                                      <p class="error">
                                          {{ $errors->first('category_name') }}
                                      </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.category.name') <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <input type="text" name="category_name" id="category_name" class="form-control" placeholder="@lang('global.category.namePlaceholder')" value="{{ old('category_name',$categoryData->category_name) }}" maxlength='100' >
                                    @if($errors->has('category_name'))
                                      <p class="error">
                                          {{ $errors->first('category_name') }}
                                      </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.category.on_homepage') </label>
                                <div class="col-sm-10">
                                  <select name="on_homepage" id="on_homepage" class="form-control">
                                    <option @if($categoryData->on_homepage == 1) selected  @endif  value="1">@lang('global.category.yes')</option>
                                    <option @if($categoryData->on_homepage == 0) selected  @endif value="0">@lang('global.category.no')</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.category.status') <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                  <select name="status" id="status" class="form-control">
                                    <option @if($categoryData->status == 1) selected  @endif  value="1">@lang('global.category.active')</option>
                                    <option @if($categoryData->status == 0) selected  @endif  value="0">@lang('global.category.inactive')</option>
                                  </select>
                                   @if($errors->has('status'))
                                      <p class="error">
                                          {{ $errors->first('status') }}
                                      </p>
                                   @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('global.category.photo') <span class="required"> *</span></label>
                                <div class="col-sm-10">
                                @php 
                                 if(!empty($categoryData->photo_thumbnail)){
                                  $url = asset("uploads/category/photo_thumbnail")."/".$categoryData->photo_thumbnail; 
                                }else{
                                  $url = asset("backend/no_image.png"); 
                                }
                                @endphp
                                  <img src='{{$url}}' id="category_image" border="0" height="100" width="100" class="img-rounded" align="center" onerror="" />
                                  <input type='file' name='photo' id='photo' onchange="readURL(this);" accept="image/*" />
                                  <input type="hidden" name="photo_name" value="{{$categoryData->photo}}">
                                  <input type="hidden" name="photo_thumb_name" value="{{$categoryData->photo_thumbnail}}">
                                   @if($errors->has('photo'))
                                      <p class="error">
                                          {{ $errors->first('photo') }}
                                      </p>
                                   @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button data-toggle="tooltip" data-placement="top" title="@lang('global.category.editBtnTooltip')"  type="submit" class="btn btn-dark">@lang('global.category.submit')</button>
                                    <a href="{{url('category/')}}" class="btn btn-danger">@lang('global.cancleBtn')</a>
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
@section('javascript')
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#category_image')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection