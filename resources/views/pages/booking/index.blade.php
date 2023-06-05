@extends('layouts.master')
@section('title')
    @lang('Pemesanan ')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Pemesanan
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">
                    <div class="row g-4 align-items-center">

                        <div class="col-sm-8">
                            <form action="{{ route('booking.index') }}" method="postuser">
                                <div class="hstack gap-2">
                                    <input type="text" name="search" id="search" value="{{ old('search') }}"
                                        class="form-control" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <a href='{{ route('booking.booking_pdf') }}' class="btn btn-soft-primary" target="_blank"><i
                                        class="bx bx-printer"></i> Print PDF</a>
                                <button type="button" class="btn btn-success add-btn"
                                    onclick="location.href='{{ route('booking.create') }}'"><i
                                        class="ri-add-line align-bottom me-1"></i> Tambah Pemesanan</button>
                            </div>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-info" role="alert">
                                {{ session('success') }}
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle" id="customerTable">

                            <thead class="table-light">
                                <tr>
                                    <th data-sort="">No</th>
                                    <th data-sort="customer">Nama Pemesan</th>
                                    <th data-sort="wedding_date">Tanggal Pernikahan</th>
                                    <th data-sort="location_wedding">Lokasi Pernikahan</th>
                                    <th data-sort="status">Status</th>
                                    <th class="text-center" data-sort="action">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($booking['data'] as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="customer">{{ $item['customer'] }}</td>
                                        <td class="wedding_date">{{ $item['wedding_date'] }}</td>
                                        <td class="location_wedding">{{ $item['location_wedding'] }}</td>
                                        <td>
                                            @if ($item['status'] == 'down_payment')
                                                <span class="badge bg-soft-primary text-danger">Waiting</span>
                                            @elseif($item['status'] == 'waiting')
                                                <span class="badge bg-soft-success text-success">Down Payment</span>
                                            @else
                                                <span class="badge bg-soft-danger text-danger">Dibatalkan</span>
                                            @endif
                                        </td>
                                        {{-- <td class="status">{{ $item['status'] == 0 ? 'Waiting' : 'Down Payment' }} --}}
                                        </td>
                                        <td class="action text-center">
                                            {{-- if($item['status'] == 0) --}}
                                            {{-- <a href='{{ route('booking.approve', $item['id']) }}'
                                                    class="btn btn-sm btn-info">Konfirmasi</a> --}}
                                            <a onclick="updateBooking({{ $item['id'] }})"
                                                class="btn btn-sm btn-info">Konfirmasi</a>
                                            <a href='{{ route('booking.detail', $item['id']) }}'
                                                class="btn btn-sm btn-secondary"><i
                                                    class="ri-eye-line align-bottom"></i></a>
                                            {{-- <a href='{{ route('booking.edit', $item['id']) }}'
                                                class="btn btn-sm btn-primary"><i
                                                    class="ri-pencil-line align-bottom"></i></a> --}}
                                            <a onclick="editBooking({{ $item['id'] }})" class="btn btn-sm btn-primary"><i
                                                    class="ri-pencil-line align-bottom"></i></a>
                                            <a onclick="deleteTesti({{ $item['id'] }})" class="btn btn-sm btn-danger"
                                                href="#"><i class="ri-delete-bin-line"></i></a>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                    colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ leads We
                                    did not find any
                                    leads for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">

                                @foreach ($booking['links'] as $item)
                                    @php
                                        $label = $item['label'] == 'pagination.previous' ? 'Previous' : ($item['label'] == 'pagination.next' ? 'Next' : $item['label']);
                                    @endphp

                                    <li class="page-item"><a
                                            class="page-link {{ $item['active'] == true ? 'active' : '' }}"
                                            href="{{ $item['url'] }}">{{ $label }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/crm-leads.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script>
        function editBooking(id) {
            location.href = `{{ route('booking.edit') }}?id=${id}`
        }

        function updateBooking(id) {

            location.href = `{{ route('booking.update_status_booking') }}?id=${id}`
        }
    </script>

    <script>
        function deleteTesti(id) {
            var x = confirm('Apakah anda yakin akan menghapus data ini ?')
            if (x) {
                const formData = new FormData()
                formData.append('_method', 'DELETE')
                fetch("{{ route('booking.destroy', '') }}" + `/${id}`, {
                    method: "POST",
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(res => res.json()).then(
                    res => {
                        console.log(res)
                        if (res.success) {

                            location.reload()
                        } else {
                            alert(res.success)
                        }
                    }
                )
            }
        }
    </script>
@endsection
