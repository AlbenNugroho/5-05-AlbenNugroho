@extends ('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <H3> {{ $nama}} </H3>
    <P> {{ $email }} </P>
    <img src="images/{{ $gambar }}"alt="{{ $nama }}" width="200px">
    <script src="js/script.js"></script>
@endsection