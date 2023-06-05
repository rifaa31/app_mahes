@extends('layouts.master')
@section('title')
    @lang('Akun ')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Akun
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="leadsList">
                <div class="card-header border-0">
                    <div class="row g-4 align-items-center">

                        <div class="col-sm-10">
                            <form action="{{ route('user.index') }}" method="postuser">
                                <div class="hstack gap-2">
                                    <input type="search" name="search" class="form-control" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>

                        {{-- <form class="form" method="GET" action="{{ route('search') }}">
                            <div class="form-group w-100 mb-3">
                                <label for="search" class="d-block mr-2">Pencarian</label>
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search"
                                    placeholder="Masukkan keyword">
                                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                            </div>
                        </form> --}}
                        {{-- <div class="col-sm-3">
                            <form action="{{ route('search') }}" method="get">
                                <div class="search-box">
                                    <input type="text" class="form-control search" name="search" placeholder="Search..."
                                        value="">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </form>
                        </div> --}}

                        <div class="col-sm-auto ms-auto">
                            <div class="hstack gap-2">
                                <button type="button" class="btn btn-success add-btn"
                                    onclick="location.href='{{ route('user.create') }}'"><i
                                        class="ri-add-line align-bottom me-1"></i>
                                    Tambah Akun</button>
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
                        <div class="table-responsive table-card">
                            <table class="table align-middle" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th data-sort="">No</th>
                                        <th data-sort="name">Nama</th>
                                        <th data-sort="email">Email</th>
                                        <th data-sort="password">Password </th>
                                        <th data-sort="role">Role</th>
                                        <th class='text-center' data-sort="action">Aksi</th>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($user['data'] as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td class="name">{{ $item['name'] }}</td>
                                            <td class="email">{{ $item['email'] }}</td>
                                            <td class="password">{{ $item['password'] }}</td>
                                            <td class="role">{{ $item['role'] }}</td>
                                            <td class="action text-center">
                                                <form
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');"
                                                    action="{{ route('user.destroy', $item['id']) }}" method="POST">
                                                    <a href="{{ route('user.edit', $item['id']) }}"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="ri-pencil-line align-bottom"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </form>

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

                                    @foreach ($user['links'] as $item)
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
        function deleteTesti(id) {
            var x = confirm('Apakah anda yakin akan menghapus data ini ?')
            if (x) {
                const formData = new FormData()
                formData.append('_method', 'DELETE')
                fetch("{{ route('user.destroy', '') }}" + `/${id}`, {
                    method: "POST",
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(res => res.json()).then(
                    res => {
                        console.log(res)
                        if (res.code == 200) {

                            location.reload()
                        } else {
                            alert(res.message)
                        }
                    }
                )
            }
        }
    </script>
    <script>
        const modalTitle = document.getElementsByClassName('modal-add');
        window.addEventListener('DOMContentLoaded', function() {
            modalTitle.innerHTML = 'Add User'
        })
    </script>
@endsection
