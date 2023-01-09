<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Point;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PointController extends Controller
{
    public function point()
    {
        $pointhistory = Point::where('user_id', Auth::user()['id'])->get();
        $voucherhistory = Voucher::where('user_id', Auth::user()['id'])->get();

        $point = Point::where('user_id', Auth::user()['id'])->sum('point');
        $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');
    
        $total = $point - $voucher;

        return view('poin', ['pointhistory' => $pointhistory, 'voucherhistory' => $voucherhistory, 'point' => $total]);
    }

    public function claim($type)
    {
        $point = Point::where('user_id', Auth::user()['id'])->sum('point');
        $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');
        $total = $point - $voucher;

        switch ($type) {
            case 'indomaret':
                $cost = 10000;
                break;
            case 'gojek':
                $cost = 15000;
                break;
            case 'ikea':
                $cost = 20000;
                break;
            default:
                $cost = 0;
                break;
        }

        if ($total < $cost) {
            return back()->with('error', 'Poin tidak cukup');
        } else {
            //generate random code
            $code = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4) . '-' . substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4) . '-' . substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4) . '-' . substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);

            $voucher = new Voucher;
            $voucher->user_id = Auth::user()['id'];
            $voucher->date = Carbon::now();
            $voucher->code = $code;
            $voucher->point = $cost;
            $voucher->description = 'Voucher ' . ucfirst($type);
            $voucher->save();

            return back()->with('success', 'Kode voucher anda : ' . $code);
        }
    }
}
