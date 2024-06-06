@foreach ($kecamatan as $k)
    <option value="{{ $k['kecamatan_id'] }}" @if (isset($kecamatan_id) && $kecamatan_id == $k['kecamatan_id']) selected @endif>{{ $k['kecamatan_nama'] }}</option>
@endforeach
