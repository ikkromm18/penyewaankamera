<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        $acaras = Acara::all();
        $bookedDates = Transaksi::pluck('tanggal')->toArray();
        return view('transaksi.create', compact('transaksis', 'acaras', 'bookedDates'));
    }

    public function order()
    {
        $acaras = Acara::all();
        $bookedDates = Transaksi::pluck('tanggal')->toArray();
        return view('landing.order', compact('acaras', 'bookedDates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'name' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
            'jenis_acara' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'waktu' => 'required|date_format:H:i',
            'drone' => 'nullable',
            'jimijib' => 'nullable',
            'total_harga' => 'required|numeric',
        ]);

        // Cek apakah tanggal sudah dipesan
        $existingTransaksi = Transaksi::where('tanggal', $request->input('tanggal'))->first();

        if ($existingTransaksi) {
            return redirect()->back()->withErrors(['tanggal' => 'Tanggal ini sudah dipesan, silakan pilih tanggal lain.'])->withInput();
        }

        // Retrieve the selected acara and its price
        $acara = Acara::where('jenis_acara', $request->input('jenis_acara'))->first();
        $acaraPrice = $acara ? $acara->harga : 0;

        // Calculate additional prices for drone and jimijib
        $dronePrice = $request->input('drone') ? 1000000 : 0;
        $jimijibPrice = $request->input('jimijib') ? 500000 : 0;
        $totalHarga = $acaraPrice + $dronePrice + $jimijibPrice;

        Transaksi::create([
            'tanggal' => $request->input('tanggal'),
            'name' => $request->input('name'),
            'nohp' => $request->input('nohp'),
            'jenis_acara' => $request->input('jenis_acara'),
            'alamat' => $request->input('alamat'),
            'waktu' => $request->input('waktu'),
            'drone' => $dronePrice,
            'jimijib' => $jimijibPrice,
            'total_harga' => $totalHarga,
        ]);

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan!');
    }
}
