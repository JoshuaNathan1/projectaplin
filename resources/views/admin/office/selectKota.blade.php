@foreach ($kota as $k)
    <option value="{{ $k['kota_id'] }}" @if (isset($kota_id) && $kota_id == $k["kota_id"]) selected @endif>{{ $k['kota_nama'] }}</option>
@endforeach
