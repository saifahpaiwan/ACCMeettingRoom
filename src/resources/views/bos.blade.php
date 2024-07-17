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
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="foo1">ปีงบประมาณ</span>
                                    </div>
                                    <select class="form-control" id="foo1" name="foo1">
                                        <option value=""> ตุลาคม </option>
                                    </select>
                                    <select class="form-control" id="foo1" name="foo1">
                                        <option value=""> 2024 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="foo1">ผู้จำหน่าย</span>
                                    </div>
                                    <select class="form-control" id="foo1" name="foo1">
                                        <option value=""> ทั้งหมด </option>
                                    </select>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="foo1">
                                            <i class="fe-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-right responsive-mobile-btn">
                        <button class="btn btn-warning waves-effect waves-light ml-1" type="button"> <i class="fe-printer"></i> </button>
                        <button class="btn btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-settings"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4>รวมยอดค้างสะสม : 0.00 ทั้งหมด</h4>
                <div class="table-responsive">
                    <table class="table table-hover m-0 table-actions-bar" id="dataTable">
                        <thead>
                            <tr>
                                <th width="10%"> วันที่ชำระ </th>
                                <th width="10%"> เลขที่เอกสาร </th>
                                <th width="10%"> ผู้จำหน่าย </th>
                                <th width="10%"> จำนวนเงิน </th>
                                <th width="10%"> หัก ณ ที่จ่าย </th>
                                <th width="10%"> ยอดจ่ายสุทธิ </th>
                                <th width="10%"> สถานะ </th>
                                <th width="0%" class="text-right"> # </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 01 ตุลาคม 2024</td>
                                <td> PV00001</td>
                                <td>
                                    VEERA DRYCUTTING COMPANY LIMITED<br>
                                    <small>โอนเงิน ธนาคาร #98902</small>
                                </td>
                                <td> 2,000.00</td>
                                <td>
                                    200.00<br>
                                    <small>(10%)</small>
                                </td>
                                <td> 1,800.00</td>
                                <td>
                                    <span class="badge badge-success p-2">
                                        จ่ายแล้ว
                                    </span>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-more-vertical"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td> 05 ตุลาคม 2024</td>
                                <td> PV00002</td>
                                <td>
                                    ABC SUPPLY CO., LTD.<br>
                                    <small>โอนเงิน ธนาคาร #98903</small>
                                </td>
                                <td> 3,500.00</td>
                                <td>
                                    350.00<br>
                                    <small>(10%)</small>
                                </td>
                                <td> 3,150.00</td>
                                <td>
                                    <span class="badge badge-warning p-2">
                                        รอการชำระ
                                    </span>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-more-vertical"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td> 10 ตุลาคม 2024</td>
                                <td> PV00003</td>
                                <td>
                                    XYZ TECHNOLOGY<br>
                                    <small>โอนเงิน ธนาคาร #98904</small>
                                </td>
                                <td> 1,200.00</td>
                                <td>
                                    120.00<br>
                                    <small>(10%)</small>
                                </td>
                                <td> 1,080.00</td>
                                <td>
                                    <span class="badge badge-danger p-2">
                                        ล่าช้า
                                    </span>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-more-vertical"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td> 15 ตุลาคม 2024</td>
                                <td> PV00004</td>
                                <td>
                                    GREEN ENERGY SOLUTIONS<br>
                                    <small>โอนเงิน ธนาคาร #98905</small>
                                </td>
                                <td> 5,000.00</td>
                                <td>
                                    500.00<br>
                                    <small>(10%)</small>
                                </td>
                                <td> 4,500.00</td>
                                <td>
                                    <span class="badge badge-success p-2">
                                        จ่ายแล้ว
                                    </span>
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-more-vertical"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
</script>
@endsection