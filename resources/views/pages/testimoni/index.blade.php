@extends('layouts.master')
@section('title')
    @lang('Testimoni ')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Testimoni
        @endslot
    @endcomponent

    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">
                    <div class="row g-4 align-items-center">

                        <div class="col-sm-9">
                            <form action="{{ route('testimoni.index') }}" method="postuser">
                                <div class="hstack gap-2">
                                    <input type="search" name="search" class="form-control" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <button type="button" class="btn btn-success add-btn"
                                    onclick="location.href='{{ route('testimoni.create') }}'"><i
                                        class="ri-add-line align-bottom me-1"></i> Tambah Testimoni</button>
                            </div>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-info" role="alert">
                                {{ session('success') }} </div>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle" id="testimoniTable">
                                <thead class="table-light">
                                    <tr>
                                        <th data-sort="">No</th>
                                        <th data-sort="cutomer_name">Nama</th>
                                        <th data-sort="customer_date">Tanggal</th>
                                        <th data-sort="massaage">Pesan</th>
                                        <th class="text-center" data-sort="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($testimoni['data'] as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td class="cutomer_name">{{ $item['customer_name'] }}</td>
                                            <td class="customer_date">{{ $item['customer_date'] }}</td>
                                            <td class="massaage">{{ $item['massage'] }}</td>
                                            <td class="action text-center">
                                                <form
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');"
                                                    action="{{ route('testimoni.destroy', $item['id']) }}" method="POST">
                                                    <a href="{{ route('testimoni.edit', $item['id']) }}"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="ri-pencil-line align-bottom"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </form>

                                                {{-- <a onclick="deleteTesti({{ $item['id'] }})" class="btn btn-sm btn-danger"
                                                    href="#"><i class="ri-delete-bin-line"></i></a> --}}

                                            </td>
                                        </tr>
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

                                    @foreach ($testimoni['links'] as $item)
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
@endsection
