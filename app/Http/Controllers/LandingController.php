<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $uri = $request->route()->getPrefix();
        $testimoni = Testimoni::paginate()->toArray();
        $package = Product::paginate()->toArray();
        $package = Product::select('title', 'price', 'description')
            ->where('type', 'package')->get();
        /**
         * pages adalah nama folder
         * schedule adalah nama file
         */
        return view('pages.landing.index', compact('testimoni', 'package'));
    }
    public function Booknow()
    {
        $booking = Booking::all();
        $product = Product::all()->toArray();

        return view('pages.landing.booknow', compact('product'));
    }

    public function store(Request $request)
    {
        try {
            $data = $request->only(['id', 'customer', 'wedding_date', 'number_phone', 'location', 'location_wedding', 'product_id']);
            $total_payment = 0;
            $payloadItem = [];
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
                'total_payment' => ($total_payment * 10) / 100,
                'status' => 'down_payment',
            ];

            $bookingId = Booking::create($payloadBooking)->id;

            foreach ($data['product_id'] as $prod) {
                $payloadItem[] = [
                    'booking_id' => $bookingId,
                    'product_id' => explode('#', $prod)[0],

                ];
            }

            DB::table('booking_detail')->insert($payloadItem);
            // return redirect('landing')->with('success', 'Data Pemesanan Berhasil Disimpan');
            // return redirect()->to('https://wa.me/+6282316895620');
            // return redirect('https://api.whatsapp.com/send?phone=6282316895620');
            return redirect('https://api.whatsapp.com/send?phone=6282316895620');
        } catch (\Throwable$th) {
            // return redirect()->back()->with('error', 'Gagal booking');
            return redirect('https://api.whatsapp.com/send?phone=6282316895620/&text=Hello%2C%20Perkenalkan%20nama%20saya%20...%20ingin%20mengkonfimasi%20pembayaran%20booking%20jasa%20Wedding%20Organizer%20Maheswari%20Enterprise.%20atas%20nama%3A%20.....%20sekian%20terimkasih
            ');
        }
    }
}
