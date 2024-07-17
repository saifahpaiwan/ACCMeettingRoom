@extends('layouts.app')
@section('style')
<style>

</style>
@endsection

@section('content')
@include('include.page-title-box')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-9 responsive-mobile-btn">
                        <button class="btn btn-dark waves-effect waves-light" type="button"> <i class="fe-grid"></i> Table </button> 
                    </div>
                    <div class="col-md-3 text-right responsive-mobile-btn d-flex align-items-center">
                        <h4 class="m-auto"> Select Foods Order </h4>
                        <button class="btn btn-warning waves-effect waves-light ml-1" type="button"> <i class="fe-printer"></i> </button>
                        <button class="btn btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-settings"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row mb-2">

            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div style="height: 200px; background: url({{ asset('/images/foods/F-1.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">ผัดไทย</h5>
                        <p class="card-text"> เส้นจันท์ผัดกับกุ้งหรือไก่ และถั่วงอก </p>
                        <a href="#" class="btn btn-block btn-primary waves-effect waves-light"><i class="fe-plus-square"></i> Add </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div style="height: 200px; background: url({{ asset('/images/foods/F-2.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">หมี่ผัดฮ่องกง</h5>
                        <p class="card-text"> เส้นหมี่ผัดกับเนื้อและผัก </p>
                        <a href="#" class="btn btn-block btn-primary waves-effect waves-light"><i class="fe-plus-square"></i> Add </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div style="height: 200px; background: url({{ asset('/images/foods/F-3.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">ไก่ทิคก้า มาซาล่า</h5>
                        <p class="card-text"> ไก่ที่หมักด้วยเครื่องเทศและย่าง </p>
                        <a href="#" class="btn btn-block btn-primary waves-effect waves-light"><i class="fe-plus-square"></i> Add </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div style="height: 200px; background: url({{ asset('/images/foods/F-4.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">ริซอตโต้</h5>
                        <p class="card-text"> ข้าวอบครีมเนื้อสัมผัสเนียน </p>
                        <a href="#" class="btn btn-block btn-primary waves-effect waves-light"><i class="fe-plus-square"></i> Add </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div style="height: 200px; background: url({{ asset('/images/foods/F-5.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="card-body">
                        <h5 class="card-title">พาสต้า</h5>
                        <p class="card-text"> เส้นพาสต้าในซอสต่างๆ </p>
                        <a href="#" class="btn btn-block btn-primary waves-effect waves-light"><i class="fe-plus-square"></i> Add </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">  
                <div>#Air09/1</div>
                <div class="h4 m-0">THB 900.00</div>
            </div>
            <div class="card-body d-flex justify-content-between">
                <div class="mr-auto">Bill NO. 01000111 </div>
                <div> Time 23:41:00 </div>
                <button class="btn btn-sm btn-warning waves-effect waves-light ml-1" type="button"> <i class="fe-printer"></i> </button>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex"> 
                    <div style="height: 60px; width: 60px; background: url({{ asset('/images/foods/F-5.jpg') }}); background-size: cover; background-position: center;"></div>
                    <div class="ml-2">
                        <div> <b> #0913984 พาสต้า</b> <small>เส้นพาสต้าในซอส </small></div>
                        <div> Price 900.00฿ </div>
                        <div>Qty 1 x Portion</div>
                    </div>
                    <button class="btn btn-sm btn-danger waves-effect waves-light ml-auto" type="button"> <i class="fe-trash-2"></i>  </button>
                </li> 
            </ul>
            <div class="card-footer d-flex justify-content-between">
                <div class="">Sub Total. 900.00</div>
                <div class="">Discount 00.00</div>
            </div>
            <div class="card-footer bg-white text-center">
                <button class="btn btn-warning waves-effect waves-light ml-1" type="button"> <i class="fe-printer"></i> Printer</button>
                <button class="btn btn-success waves-effect waves-light ml-1" type="button"> <i class="fe-file-text"></i> Payment</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
</script>
@endsection