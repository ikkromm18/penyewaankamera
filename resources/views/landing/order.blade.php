@extends('layouts.master')
@section('title', 'Order Now')
@section('content')
    @if (session('success'))
        <div class="mb-4 p-2 bg-green-100 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
    @endif
    <div class="hero h-screen flex gap-8 px-12 text-white">

        <div class="container px-48 py-8 mt-8 rounded-lg">
            <h2 class="font-bold text-5xl mb-8">Form Booking</h2>
            <form class="w-full" action="{{ route('transaksi.store') }}" method="POST">
                @csrf

                {{-- Tanggal --}}
                <div class="mb-2">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-white">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('tanggal') }}" required />
                    @error('tanggal')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Nama Lengkap --}}
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Nama Lengkap</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('name') }}" placeholder="Masukkan Nama" required />
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- No HP --}}
                <div class="mb-2">
                    <label for="nohp" class="block mb-2 text-sm font-medium dark:text-white">No HP</label>
                    <input type="text" id="nohp" name="nohp"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ old('nohp') }}" placeholder="Masukkan No HP" required />
                    @error('nohp')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Jenis Acara --}}
                <div class="mb-2">
                    <label for="jenis_acara" class="block mb-2 text-sm font-medium">Jenis Acara</label>
                    <select id="jenis_acara" name="jenis_acara" class="input input-bordered w-full text-black">
                        @foreach ($acaras as $acara)
                            <option value="{{ $acara->jenis_acara }}" data-harga="{{ $acara->harga }}">
                                {{ $acara->jenis_acara }}
                            </option>
                        @endforeach
                    </select>
                    @error('jenis_acara')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div class="mb-2">
                    <label for="alamat" class="block mb-2 text-sm font-medium dark:text-white">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- waktu --}}
                <div class="mb-2">
                    <label for="waktu" class="block mb-2 text-sm font-medium dark:text-white">Jam Dimulainya
                        Acara</label>
                    <input type="time" id="waktu" name="waktu"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-black"
                        value="{{ old('waktu') }}" placeholder="Masukkan No HP" required />
                    @error('waktu')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Checkbox Jimijib dan Drone --}}
                <label class="block mb-2 text-sm font-medium dark:text-white">Additional</label>
                <div class="mb-2 flex gap-4">
                    <div class="">
                        <input type="checkbox" id="drone" name="drone" value="1000000"
                            {{ old('drone') ? 'checked' : '' }}>
                        <label for="drone" class="ml-2">Drone</label>
                    </div>
                    <div class="">
                        <input type="checkbox" id="jimijib" name="jimijib" value="500000"
                            {{ old('jimijib') ? 'checked' : '' }}>
                        <label for="jimijib" class="ml-2">Jimijib</label>
                    </div>
                </div>

                {{-- Total Harga --}}
                <div class="mb-5">
                    <label for="total_harga" class="block mb-2 text-sm font-medium dark:text-white">Total Harga</label>
                    <input type="number" id="total_harga" name="total_harga"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-black"
                        value="{{ old('total_harga') }}"readonly />
                    @error('total_harga')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>

        {{-- Data Yang Sudah Di Booking --}}
        <div class="container px-48 bg-slate-400 mt-8 ">
            <h2 class="text-xl font-semibold mt-8">Tanggal yang Sudah Dibooking</h2>
            <ul class="list-disc list-inside  p-4 rounded-md">
                @foreach ($bookedDates as $date)
                    <li>{{ \Carbon\Carbon::parse($date)->format('d M Y') }}</li>
                @endforeach
            </ul>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const droneCheckbox = document.getElementById('drone');
            const jimijibCheckbox = document.getElementById('jimijib');
            const totalHargaInput = document.getElementById('total_harga');
            const jenisAcaraSelect = document.getElementById('jenis_acara');

            function updateTotalHarga() {
                let total = 0;
                if (droneCheckbox.checked) {
                    total += parseInt(droneCheckbox.value);
                }
                if (jimijibCheckbox.checked) {
                    total += parseInt(jimijibCheckbox.value);
                }
                if (jenisAcaraSelect) {
                    const selectedOption = jenisAcaraSelect.options[jenisAcaraSelect.selectedIndex];
                    total += parseInt(selectedOption.getAttribute('data-harga'));
                }
                totalHargaInput.value = total;
            }

            droneCheckbox.addEventListener('change', updateTotalHarga);
            jimijibCheckbox.addEventListener('change', updateTotalHarga);
            jenisAcaraSelect.addEventListener('change', updateTotalHarga);

            updateTotalHarga(); // Initialize total harga on page load
        });
    </script>
@endsection
