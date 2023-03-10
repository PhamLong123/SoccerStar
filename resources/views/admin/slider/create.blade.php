<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout-admin')
@section('title')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Slider</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <p>{{Session::get('success')}}</p>
                    @endif
                    <form role="form" action="{{ Route('slider.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label for="txt-id">ID sản phẩm</label>
                                <input type="text" class="form- control" id="txt-id" name="product_id" placeholder="Nhập ID sản phẩm...">
                            </div> -->
                            <div class="form-group">
                                <label for="image">Hình ảnh</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="slider_image">
                                        <label class="custom-file-label" for="image">Chọn hình ảnh</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="txt-product">Sản phẩm</label>
                                <select class="form-control" id="txt-product" name="product_id">
                                    @foreach($product as $p)
                                    <option value="{{ $p->id }}">{{ $p->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="txt-numerical-order">Thứ tự</label>
                                <input type="text" class="form-control" id="txt-numerical-order" name="numerical_order" placeholder="Nhập số thứ tự...">
</div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script>

</script>
@endsection