@extends('backend.layout.base')
@section('title', $title)
@section('content')
<div id="ribbon" style=" background-color:#57889c">
    <!-- breadcrumb -->
    <div class="col-md-6 col-sm-6">
        <ol class="breadcrumb">
            <!-- This is auto generated -->
        </ol>
    </div>
    <!-- end breadcrumb -->

    <div class="col-md-6 col-sm-6">
        <a class="btn btn-default btn-flat pull-right" href="javascript:ActionCreate()">
            <i class="fa fa-plus"></i> <span>Thêm mới</span>
        </a>
        <a href="#collapseDiv" class="btn btn-flat btn-default pull-right" aria-controls="collapsePanel" data-toggle="collapse" role="button" style="float: right; margin-right:5px;">
            Tìm kiếm
        </a>
    </div>
</div>
<div id="content">


    {{-- @Html.Partial("SearchPartial") --}}


    <div class="jarviswidget" id="wid-id-0">
        <header role="heading">
            <h2 class="group-tittle mt10">
                Quản lý {{ $title }}
            </h2>

        </header>
        <div class="widge-t-body no-padding">

            <div id="tbl-tvthanhvien" class="hntbl-cover" style="padding:10px;">
                <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
							<th>Ảnh</th>
							<th>Họ tên</th>
							<th>Địa chỉ </th>
							<th>Giới tính</th>
							<th>Ngày sinh</th>
							<th>Chức vụ</th>
							<th>Học vấn</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($users as $user)
							<tr>
								<td></td>
								<td class="text-center">
									<img style="width:35px;height:35px;" src="{{ $user->avatar }}" alt="{{ $user->full_name }}">
								</td>
								<td >{{ $user->full_name }}</td>
								<td>{{ $user->address }}</td>
								<td class="text-center">
                                    @if ($user->sex == 0)
                                        <span class="label label-success">Nữ</span>
                                    @else
                                        <span class="label label-primary">Nam</span>
                                    @endif                        
                                </td>
								<td class="text-center">{{ $user->birthday }}</td>
								<td>{{ $user->position_id }}</td>
								<td>{{ $user->education_id }}</td>
								<td class="text-center">
									<a href='{{ $user->edit }}' title ='Chỉnh sửa'><i class="far fa-edit fa-lg"></i></a>
									<a href='{{ $user->delete }}' title = 'Xóa'><i class="fas fa-trash-alt fa-lg" style='color:red'></i></a>
								</td>
							</tr>
                    	@endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<div id="modal_create" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">

</div>

<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">

</div>

<div id="modal_detail" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">

</div>

@endsection

