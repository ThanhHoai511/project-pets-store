@extends('admin.layouts.master')
@section('title','Add Posts')
@section('content')
    @include('admin.layouts.flash-msg')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        
        <div class="form-group">
            <label class="col-md-3 control-label">Tiêu đề bài viết</label>
            <div class="col-md-8">
                <input name="title" id="title" placeholder="Nhập tiêu đề bài viết" type="text" class="form-control" value="{{ old('title') }}" onkeyup="ChangeToSlug();">
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Slugs</label>
            <div class="col-md-8">
                <input name="slugs" value="{{ old('slug') }}" placeholder="Slugs" id="slug" type="text" readonly class="form-control" >
                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Ảnh</label>
            <div class="col-md-9">
                <div style="height: 32px;">
                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-id-check_upload bootstrap-switch-animate" style="width: 204px;">
                        <div class="bootstrap-switch-container" style="width: 303px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 101px;">Upload Ảnh</span><span class="bootstrap-switch-label" style="width: 101px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 101px;">Link Ảnh</span><input checked="" id="check_upload" name="check_upload" type="checkbox" class="make-switch" data-on-text="Upload Ảnh" data-off-text="Link Ảnh" data-check-upload="1" "=""></div></div>
                </div>
                <p class=" help-block">Hình thức upload</p>
            </div>
            <div id="select_image_to_upload" class="col-md-9 col-md-offset-3">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn green btn-file" id="img">
                            <span class="fileinput-new"> Select file </span>
                            <input type="file" name="photos[]" id="photos" multiple value="{{ old('photos') }}">
                        </span>
                    </div>
                </div>
            </div>
            <div id="paste_url_image" class="col-md-8 col-md-offset-3" style="display: none;">
                <input name="url_image" placeholder="Nhập link ảnh" type="text" class="form-control">
                <p class="help-block">Link ảnh</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Tóm tắt</label>
            <div class="col-md-8">
                <textarea class="form-control" placeholder="Nhập tóm tắt bài viết" value="{{ old('summary') }}" name="summary" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Nội dung</label>
            <div class="col-md-8">
                <textarea class="ckeditor form-control" id="content" name="content" value="{{ old('content') }}" rows="6"></textarea>
                <script>
                    CKEDITOR.replace( 'content' );
                </script>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Loại tin, Trạng thái</label>
            <div class="col-md-2">
                <select name="type" class="bs-select form-control" data-style="blue">
                    <option value="">Loại tin</option>
                    <option value="1">HOT</option>
                    <option value="2">Thường</option>
                </select>
                <p class="help-block">Mặc định: HOT</p>
            </div>

            <div class="col-md-2">
                <select name="status" class="bs-select form-control" data-style="green-meadow">
                    <option value="">Trạng thái</option>
                    <option value="1">Kích hoạt</option>
                    <option value="2">Không kích hoạt</option>
                </select>
                <p class="help-block">Mặc định: Kích hoạt</p>
            </div>
        </div>
        <!-- Form action buttons -->
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" name="Create_new_Items"  id="Create_new_Items" class="btn green btn-outline">
                        <i class="fa fa-check"></i> Submit
                    </button>
                    <button type="reset" name="reset" class="btn default">Cancel</button>
                </div>
            </div>
        </div>
    </form>
@endsection
