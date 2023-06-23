<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>decument</h1>
    {{-- <select name="provinsi" id="provinsi" class="form-control">
        <option value=""> -- Select One --</option>
        @foreach ($uniqueCityNames as $cityName)
            <option value="{{ $cityName }}"  {{ (isset($cityName) || old('id'))? "selected":"" }}>{{ $cityName }}</option>
        @endforeach 
    </select>

    <select name="kota" id="kota" class="form-control">
        <option value=""> -- Select One --</option>
        @foreach ($kota as $kota)
            <option value="{{ $kota }}"  {{ (isset($kota) || old('id'))? "selected":"" }}>{{ $kota }}</option>
        @endforeach 
    </select> --}}

    <select name="provinsi" id="provinsi">
        @foreach ($uniqueCityNames as $provinsi)
            <option value="{{ $provinsi }}">{{ $provinsi }}</option>
        @endforeach
    </select>
    
    <select name="kabupaten" id="kabupaten">
        @foreach ($kota as $kabupaten)
            <option value="{{ $kabupaten }}">{{ $kabupaten }}</option>
        @endforeach
    </select>
    
    <script>
        
        // Mendengarkan perubahan pada select provinsi
        document.getElementById('provinsi').addEventListener('change', function() {
            var selectedProvinsi = this.value;
            var kabupatenSelect = document.getElementById('kabupaten');
    
            // Menghapus opsi yang ada sebelumnya pada select kabupaten
            while (kabupatenSelect.firstChild) {
                kabupatenSelect.removeChild(kabupatenSelect.firstChild);
            }
    
            // Menambahkan opsi kabupaten sesuai dengan provinsi yang dipilih
            @foreach ($kota as $kota)
    if ("{!! $kota->provinsi !!}" === selectedProvinsi) {
        var option = document.createElement('option');
        option.value = "{!! $kota->kabupaten !!}";
        option.text = "{!! $kota->kabupaten !!}";
        kabupatenSelect.appendChild(option);
    }
@endforeach
        });
    </script>
</body>
</html>