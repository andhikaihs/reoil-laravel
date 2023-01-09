<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\Point;
use App\Models\Voucher;

class ServiceController extends Controller
{
    public function status()
    {
        $point = Point::where('user_id', Auth::user()['id'])->sum('point');
        $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');

        $total = $point - $voucher;
        $services = Service::where('user_id', Auth::user()['id'])->get();
        return view('status', ['services' => $services, 'point' => $total]);
    }

    public function book()
    {
        $point = Point::where('user_id', Auth::user()['id'])->sum('point');
        $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');

        $total = $point - $voucher;
        return view('book', ['point' => $total]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $service = new Service;
        $service->user_id = Auth::user()['id'];
        $service->name = $request->name;
        $service->date = $request->date;
        $service->phone = $request->phone;
        $service->address = $request->address;
        $service->service = "Penjemputan";
        $service->volume = 0;
        $service->status = "Menunggu Konfirmasi";
        $service->save();

        return redirect('/status');
    }

    public function cancel($id)
    {
        $service = Service::find($id);
        $service->status = "Batal";
        $service->save();

        return redirect('/status');
    }

    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $service->volume = $request->volume;
        $service->status = $request->status;
        $service->save();

        if ($request->status == "Selesai") {
            $poin = new Point;
            $poin->user_id = $service->user_id;
            $poin->date = now();
            $poin->point = $request->volume * 1000;
            $poin->description = "Penjemputan";
            $poin->save();
        }

        return redirect('/transaksi');
    }

    public function transaksi()
    {
        $transactions = Service::all();
        return view('transaksi', ['transactions' => $transactions]);
    }
}