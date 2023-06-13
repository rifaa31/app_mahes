@extends('layouts.master')
@section('title')
    @lang('Produk ')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/gridjs/gridjs.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Produk
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-sm-auto ms-auto">
            <div class="hstack gap-2 mb-2">
                <button type="button" class="btn btn-success add-btn"
                    onclick="location.href='{{ route('product.create') }}'"><i class="ri-add-line align-bottom me-1"></i> Add
                    Product</button>
            </div>
        </div>
    </div>


    <!--package-->
    <div>
        @if (session()->has('success'))
            <div class="alert alert-info" role="alert">
                {{ session('success') }}
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="row mt-4">
        @foreach ($product['data'] as $item)
            <div class="col-lg-4 mt-2 justify-content-between">
                <div class="card plan-box mb-0 ribbon-box right">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                {{-- <div class="ribbon ribbon-info ribbon-shape"><span>Popular</span></div> --}}
                                <h5 class="mb-1 fw-semibold">
                                    <tr>
                                        <td class="name">{{ $item['title'] }}</td>
                                </h5>
                                <p class="text-muted mb-0">Starting From</p>
                            </div>
                        </div>
                        <div class="py-4 text-center">
                            <h1 class="month"><sup></sup><span class="ff-secondary fw-bold">
                                    <tr>
                                        <td class="name">{{ $item['price'] }}</td>
                                </span>
                        </div>
                        <div>
                            <ul class="list-unstyled text-muted vstack gap-3 ff-secondary">
                                <li>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            {!! $item['description'] !!}
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="card-footer">
                            <div class=" d-flex justify-content-between">
                                <form onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?');"
                                    action="{{ route('product.destroy', $item['id']) }}" method="POST">
                                    <a href='{{ route('product.edit', $item['id']) }}'
                                        class="btn btn-soft-primary edit-btn"><i></i>
                                        Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-soft-danger clear-btn">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- start add -->

    <!-- end add -->
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/gridjs/gridjs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/gridjs.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    {{-- <script>
        function deleteTesti(id) {
            var x = confirm('Apakah anda yakin akan menghapus data ini ?')
            if (x) {
                const formData = new FormData()
                formData.append('_method', 'DELETE')
                fetch("{{ route('product.destroy', '') }}" + `/${id}`, {
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
    </script> --}}
@endsection
