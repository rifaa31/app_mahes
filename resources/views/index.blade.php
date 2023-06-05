@extends('layouts.master')
@section('title')
    @lang('Dashboard ')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- kalender --}}
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    {{-- <link href="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
    {{-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' /> --}}
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
    @endcomponent
    {{-- Chart --}}
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0 pb-2">
                                <div class="w-100">
                                    <div id="barchart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <div class="align-items-center d-flex">
                                <h2 class="card-title mb-3 flex-grow-1 text-center">Tabel Pemesanan</h2>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"> No</th>
                                        <th scope="col">Tanggal Pernikahan</th>
                                        <th scope="col">Nama Pengantin</th>
                                        <th scope="col">Lokasi Pernikahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($booking as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item['wedding_date'] }}</td>
                                            <td>{{ $item['customer'] }}</td>
                                            <td>{{ $item['location_wedding'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-end mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            @foreach ($booking['links'] as $item)
                                @php
                                    $label = $item['label'] == 'pagination.previous' ? 'Previous' : ($item['label'] == 'pagination.next' ? 'Next' : $item['label']);
                                @endphp

                                <li class="page-item"><a class="page-link {{ $item['active'] == true ? 'active' : '' }}"
                                        href="{{ $item['url'] }}">{{ $label }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            Highcharts.chart('barchart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Pemesanan Maheswari Enterprise'
                },
                subtitle: {
                    text: 'Tahun 2023'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Pemesanan'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y} Bride</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Pemesan',
                    data: [{{ $jan }}, {{ $feb }}, {{ $mar }},
                        {{ $apr }},
                        {{ $mei }}, {{ $jun }}, {{ $jul }},
                        {{ $ags }}, {{ $sep }}, {{ $ok }},
                        {{ $nov }}, {{ $des }}
                    ]

                }, ]
            });
        </script>

        <!-- dashboard init -->
        <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

        {{-- kalender --}}
        {{-- Scripts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            $(document).ready(function() {
                var SITEURL = "{{ url('/') }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var calendar = $('#full_calendar_events').fullCalendar({
                    editable: true,
                    events: SITEURL + "/calendar-event",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function(event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function(event_start, event_end, allDay) {
                        var event_name = prompt('Event Name:');
                        if (event_name) {
                            var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD");
                            var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/calendar-crud-ajax",
                                data: {
                                    event_name: event_name,
                                    event_start: event_start,
                                    event_end: event_end,
                                    type: 'create'
                                },
                                type: "POST",
                                success: function(data) {
                                    displayMessage("Event created.");
                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title: event_name,
                                        start: event_start,
                                        end: event_end,
                                        allDay: allDay
                                    }, true);
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function(event, delta) {
                        var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        $.ajax({
                            url: SITEURL + '/calendar-crud-ajax',
                            data: {
                                title: event_name,
                                start: event_start,
                                end: event_end,
                                id: event.id,
                                type: 'edit'
                            },
                            type: "POST",
                            success: function(response) {
                                displayMessage("Event updated");
                            }
                        });
                    },
                    eventClick: function(event) {
                        var eventDelete = confirm("Are you sure?");
                        if (eventDelete) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/calendar-crud-ajax',
                                data: {
                                    id: event.id,
                                    type: 'delete'
                                },
                                success: function(response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event removed");
                                }
                            });
                        }
                    }
                });
            });

            function displayMessage(message) {
                toastr.success(message, 'Event');
            }
        </script>

        {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [],
                selectOverlap: function(event) {
                    return event.rendering === 'background';
                }
            });

            calendar.render();
        });
    </script> --}}
    @endsection
