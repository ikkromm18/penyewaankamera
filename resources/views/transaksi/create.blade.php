<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Transaksi Baru</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900">
    @include('mycomponents.navbar')

    <div class="container mx-auto p-4">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">

            <!-- Form Input -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold mb-6 text-center">Buat Transaksi Baru</h1>

                @if (session('success'))
                    <div class="mb-4 p-2 bg-green-100 text-green-700 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="tanggal" class="label">
                            <span class="label-text">Tanggal:</span>
                        </label>
                        <input type="date" id="tanggal" name="tanggal" class="input input-bordered w-full"
                            value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="name" class="label">
                            <span class="label-text">Nama:</span>
                        </label>
                        <input type="text" id="name" name="name" class="input input-bordered w-full"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="nohp" class="label">
                            <span class="label-text">No HP:</span>
                        </label>
                        <input type="text" id="nohp" name="nohp" class="input input-bordered w-full"
                            value="{{ old('nohp') }}">
                        @error('nohp')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="jenis_acara" class="label">
                            <span class="label-text">Jenis Acara:</span>
                        </label>
                        <select id="jenis_acara" name="jenis_acara" class="input input-bordered w-full">
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

                    <div class="form-group mb-4">
                        <label for="alamat" class="label">
                            <span class="label-text">Alamat:</span>
                        </label>
                        <input type="text" id="alamat" name="alamat" class="input input-bordered w-full"
                            value="{{ old('alamat') }}">
                        @error('alamat')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="waktu" class="label">
                            <span class="label-text">Waktu:</span>
                        </label>
                        <input type="time" id="waktu" name="waktu" class="input input-bordered w-full"
                            value="{{ old('waktu') }}">
                        @error('waktu')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">
                            <span class="label-text">Drone:</span>
                        </label>
                        <input type="checkbox" id="drone" name="drone" value="1000000"
                            {{ old('drone') ? 'checked' : '' }}>
                        <label for="drone" class="ml-2">Rp1.000.000</label>
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">
                            <span class="label-text">Jimijib:</span>
                        </label>
                        <input type="checkbox" id="jimijib" name="jimijib" value="500000"
                            {{ old('jimijib') ? 'checked' : '' }}>
                        <label for="jimijib" class="ml-2">Rp500.000</label>
                    </div>

                    <div class="form-group mb-6">
                        <label for="total_harga" class="label">
                            <span class="label-text">Total Harga:</span>
                        </label>
                        <input type="number" id="total_harga" name="total_harga" class="input input-bordered w-full"
                            value="{{ old('total_harga') }}" readonly>
                        @error('total_harga')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-full">Tambah Transaksi</button>
                    </div>
                </form>
            </div>

            {{-- Tanggal Sudah Di Booked --}}
            <div>
                <h2 class="text-xl font-semibold mt-8 mb-4">Tanggal yang Sudah Dibooking</h2>
                <ul class="list-disc list-inside bg-gray-50 p-4 rounded-md">
                    @foreach ($bookedDates as $date)
                        <li>{{ \Carbon\Carbon::parse($date)->format('d M Y') }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Daftar Transaksi -->
            <div>
                <h2 class="text-xl font-semibold mt-8 mb-4">Daftar Transaksi</h2>

                <div class="overflow-x-auto">
                    <table class="table-auto w-full bg-white border border-gray-200 rounded-lg">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Tanggal</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">No Hp</th>
                                <th class="border px-4 py-2">Jenis Acara</th>
                                <th class="border px-4 py-2">Alamat</th>
                                <th class="border px-4 py-2">Waktu</th>
                                <th class="border px-4 py-2">Drone</th>
                                <th class="border px-4 py-2">Jimijib</th>
                                <th class="border px-4 py-2">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td class="border px-4 py-2">{{ $transaksi->tanggal }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->name }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->nohp }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->jenis_acara }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->alamat }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->waktu }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->drone ? 'Rp1.000.000' : '-' }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->jimijib ? 'Rp500.000' : '-' }}</td>
                                    <td class="border px-4 py-2">{{ $transaksi->total_harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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

</body>

</html>
