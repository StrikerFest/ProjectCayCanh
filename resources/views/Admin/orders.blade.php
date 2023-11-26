@extends('admin.layout.default')
@section('content')
<div class="page-wrapper">
    <div class="page-content">


        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-0">Trang Hóa đơn</h5>
                    </div>
                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                    </div>
                </div>
                <hr />
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>id</th>
                                <th>Tên Khách Hàng</th>
                                <th>Ngày</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        @if($item->customer_id !=null)
                                            {{ $item->customer_name }}
                                        @else
                                            <p>Khách hàng chưa có tài khoản</p>
                                        @endif
                                    </td>
                                    <td>{{ $item -> created_at }}</td>
                                    <td>
                                        @if($item->Status == 0)
                                            <div class="d-flex align-items-center text-white"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Chờ Xác Nhận</span>
                                            </div>
                                        @elseif($item->Status == 1)
                                            <div class="d-flex align-items-center text-white"> <i
                                                    class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                <span>Đã xác nhận</span>
                                            @elseif($item->Status == 2)
                                                <div class="d-flex align-items-center text-white"> <i
                                                        class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                    <span>Đã vận chuyển</span>
                                                @elseif($item->Status == 3)
                                                    <div class="d-flex align-items-center text-white"> <i
                                                            class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i><span>Đã
                                                            Hủy</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/orderDetails/{{ $item->id }}"><button
                                                class="btn btn-outline-info px-5">Xem</button></a>
                                        @if($item->Status == 1)
                                            <a href="/changeStatus/{{ $item->id }}"><button type="button"
                                                    class="btn btn-light px-5">Đã Vận Chuyển</button></a>

                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                            {{ $order->links('admin.vendor.pagination') }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
