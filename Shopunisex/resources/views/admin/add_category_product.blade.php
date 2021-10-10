@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to("/save-category-product")}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword" placeholder="Mô tả danh mục"></textarea> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                         <select name="category_product_status" class="form-control input-sm m-bot15">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiển thị</option>
                        </select>
                    </div>
                    <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                    <?php
                        $message = Session::get('message'); //get lấy message đã put
                        if($message){
                            echo '<span class="text-alter">',$message.'</span>';
                            Session::put('message',null); 
                        }
                    ?>
                </form>
            </div>

        </div>
    </section>

</div>
</div>
@endsection