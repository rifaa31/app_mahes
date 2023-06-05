<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $booking = Booking::with(['bookingDetail.product'])->get()->toArray();
        $uri = $request->route()->getPrefix();
        $booking = Booking::where('customer', 'LIKE', "%" . $search . "%")->paginate(10)->toArray();

        return view('pages.booking.index', compact('booking'));
    }

    public function create(Request $request)
    {

        $package = Product::where('type', 'package')->get()->toArray();
        $additional = Product::where('type', 'additional')->get()->toArray();
        $entertainment = Product::where('type', 'entertainment')->get()->toArray();
        $equipment = Product::where('type', 'equipment')->get()->toArray();
        $upacara_adat = Product::where('type', 'upacara_adat')->get()->toArray();
        $id = isset($request->id) ? $request->id : '';
        return view('pages.booking.create', compact('package', 'additional', 'entertainment', 'equipment', 'upacara_adat', 'id'));
    }

    public function edit(Request $request)
    {
        // $booking = Booking::findOrFail($id);
        $package = Product::where('type', 'package')->get()->toArray();
        $additional = Product::where('type', 'additional')->get()->toArray();
        $entertainment = Product::where('type', 'entertainment')->get()->toArray();
        $equipment = Product::where('type', 'equipment')->get()->toArray();
        $upacara_adat = Product::where('type', 'upacara_adat')->get()->toArray();
        $id = isset($request->id) ? $request->id : '';
        return view('pages.booking.edit', compact('package', 'additional', 'entertainment', 'equipment', 'upacara_adat', 'id'));

    }

    public function getBooking(Request $request)
    {
        return DataTables::of(Booking::query())
            ->filter(function ($instance) use ($request) {
                if (!empty($request->get('search'))) {
                    // $instance->where(function ($w) use ($request) {
                    //     $search = $request->get('search');
                    //     $w->orWhere('name', 'LIKE', "%$search%")
                    //         ->orWhere('merk', 'LIKE', "%$search%");
                    // });
                }
            })
            ->addColumn('action', function ($item) {
                return "<button class='btn btn-sm btn-outline-primary'
           onclick='editItem(" . $item['id'] . ")'><i class='fas fa-pen'></i></button> <button
           class='btn btn-sm btn-outline-danger'
           onclick='deleteItem(" . $item['id'] . ")'><i class='fas fa-trash'></i></button>";
            })

            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        try {

            $data = $request->only(['id', 'customer', 'wedding_date', 'number_phone', 'location', 'location_wedding', 'product_id']);
            $validator = Validator::make($data, [
                'customer' => 'required',
                'location' => 'required',
                'wedding_date' => 'date',
                'number_phone' => 'required',
                'location_wedding' => 'required'], [
                'customer.required' => 'Nama tidak boleh kosong',
                'location.required' => 'alamat tidak boleh kosong',
                'wedding_date.date' => 'tanggal tidak boleh kosong',
                'number_phone.required' => 'Nomor Hp tidak boleh kosong',
                'location_wedding.required' => 'lokasi tidak boleh kosong']);
            if ($validator->fails()) {
                return response()->json(['code' => 400, 'message' => $validator->Messages(), 'data' => []], 400);
            }
            $total_payment = 0;

            foreach ($data['product_id'] as $p) {
                if (isset($p)) {

                    $total_payment += explode('#', $p)[1];
                }
            }

            $payloadBooking = [
                'customer' => $data['customer'],
                'location' => $data['location'],
                'wedding_date' => $data['wedding_date'],
                'number_phone' => $data['number_phone'],
                'location_wedding' => $data['location_wedding'],
                'total_payment' => $total_payment / 2,
                'status' => 'down_payment',
            ];

            $payloadItem = [];
            if (!isset($request->id)) {
                $bookingId = Booking::create($payloadBooking)->id;
                foreach ($data['product_id'] as $p) {
                    if (isset($p)) {
                        $payloadItem[] = [
                            'product_id' => explode('#', $p)[0],
                            'booking_id' => $bookingId,
                        ];
                    }
                }
                DB::table('booking_detail')->insert($payloadItem);
            } else {
                $bookingId = $request->id;
                $booking = Booking::find($bookingId);
                $booking->update($payloadBooking);
                $booking->bookingDetail()->delete();
                foreach ($data['product_id'] as $p) {
                    if (isset($p)) {
                        $payloadItem[] = [
                            'product_id' => explode('#', $p)[0],
                            'booking_id' => $bookingId,
                        ];
                    }
                }
                DB::table('booking_detail')->insert($payloadItem);
            }
            return redirect('booking')->with('success', 'Data Pemesanan Berhasil Disimpan');
        } catch (\Throwable$th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'gagal ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        try {

            $data = $request->only(['id', 'customer', 'wedding_date', 'number_phone', 'location', 'location_wedding', 'product_id']);
            $validator = Validator::make($data, [
                'customer' => 'required',
                'location' => 'required',
                'wedding_date' => 'date',
                'number_phone' => 'required',
                'location_wedding' => 'required'], [
                'customer.required' => 'Nama tidak boleh kosong',
                'location.required' => 'alamat tidak boleh kosong',
                'wedding_date.date' => 'tanggal tidak boleh kosong',
                'number_phone.required' => 'Nomor Hp tidak boleh kosong',
                'location_wedding.required' => 'lokasi tidak boleh kosong']);
            if ($validator->fails()) {
                return response()->json(['code' => 400, 'message' => $validator->Messages(), 'data' => []], 400);
            }
            $total_payment = 0;

            foreach ($data['product_id'] as $p) {
                if (isset($p)) {

                    $total_payment += explode('#', $p)[1];
                }
            }

            $payloadBooking = [
                'customer' => $data['customer'],
                'location' => $data['location'],
                'wedding_date' => $data['wedding_date'],
                'number_phone' => $data['number_phone'],
                'location_wedding' => $data['location_wedding'],
                'total_payment' => $total_payment / 2,
                'status' => 'down_payment',
            ];

            $payloadItem = [];
            if (!isset($request->id)) {
                $bookingId = Booking::create($payloadBooking)->id;
                foreach ($data['product_id'] as $p) {
                    if (isset($p)) {
                        $payloadItem[] = [
                            'product_id' => explode('#', $p)[0],
                            'booking_id' => $bookingId,
                        ];
                    }
                }
                DB::table('booking_detail')->insert($payloadItem);
            } else {
                $bookingId = $request->id;
                $booking = Booking::find($bookingId);
                $booking->update($payloadBooking);
                $booking->bookingDetail()->delete();
                foreach ($data['product_id'] as $p) {
                    if (isset($p)) {
                        $payloadItem[] = [
                            'product_id' => explode('#', $p)[0],
                            'booking_id' => $bookingId,
                        ];
                    }
                }
                DB::table('booking_detail')->insert($payloadItem);
            }
            $query = Booking::where('id', $id)->update($data);
            return redirect('booking')->with('success', 'Data Pemesanan Berhasil Disimpan');
        } catch (\Throwable$th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'gagal ditambahkan');
        }
    }

    // try {
    //     $data = $request->only(['id', 'customer', 'wedding_date', 'number_phone', 'location', 'location_wedding', 'product_id']);
    //     $validator = Validator::make($data, [
    //         'customer' => 'required',
    //         'location' => 'required',
    //         'wedding_date' => 'date',
    //         'number_phone' => 'required',
    //         'location_wedding' => 'required'], [
    //         'customer.required' => 'Nama tidak boleh kosong',
    //         'location.required' => 'alamat tidak boleh kosong',
    //         'wedding_date.date' => 'tanggal tidak boleh kosong',
    //         'number_phone.required' => 'Nomor Hp tidak boleh kosong',
    //         'location_wedding.required' => 'lokasi tidak boleh kosong']);
    //     if ($validator->fails()) {
    //         return response()->json(['code' => 400, 'message' => $validator->getMessages(), 'data' => []], 400);
    //     }

    //     $query = Booking::where('id', $id)->update($data);
    //     return response()->json(['code' => 200, 'message' => 'sukses', 'data' => $query]);
    // } catch (\Throwable$th) {
    //     return response()->json(['code' => 400, 'message' => $th->getMessage(), 'data' => []], 400);
    // }

    public function update_status_booking(Request $request)
    {
        try {
            $booking = Booking::where('id', $request->id);
            $data_booking = $booking->first();
            $action_update = $booking->update(['status' => 'waiting', 'total_payment' => $data_booking->total_payment * 2]);
            return redirect()->route('booking.index')->with('success', 'Berhasil Konfirmasi Pembayaran');

        } catch (\Throwable$th) {
            return redirect()->back()->with('error', 'gagal');
        }
    }

    public function destroy($id)
    {
        try {
            $data = Booking::where('id', $id)->delete();
            return response()->json(['code' => 200, 'success' => 'sukses', 'data' => $data]);
        } catch (\Throwable$th) {
            return response()->json(['code' => 400, 'success' => $th->getMessage(), 'data' => []], 400);
        }
    }

    public function getBookingById($id)
    {
        try {

            $booking = Booking::with(['bookingDetail.product'])->where('id', $id)->first();

            return response()->json(['code' => 200, 'message' => 'sukses', 'data' => $booking]);
        } catch (\Throwable$th) {
            return response()->json(['code' => 200, 'message' => $th->getMessage(), 'data' => []]);

        }
    }

    public function booking_pdf()
    {
        $booking = Booking::all();
        $pdf = PDF::loadview('pages.booking.booking_pdf', ['booking' => $booking]);
        return $pdf->stream();

    }

    public function show(Request $request, $id)
    {

        $booking = Booking::with(['bookingDetail', 'bookingDetail.product'])->where('id', $id)->first();
        // dd(json_encode($booking->bookingDetail[));
        return view('pages.booking.detail', compact('booking'));

    }
}
