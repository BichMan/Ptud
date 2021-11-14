@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
            <div class="panel-body">
                @foreach($edit_brand_product as $key =>$edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="brand_product_desc" id="ckeditor6">
                            {{$edit_value->brand_desc}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="brand_product_keywords" required>
                            {{$edit_value->meta_keywords}}
                            </textarea>
                        </div>
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection