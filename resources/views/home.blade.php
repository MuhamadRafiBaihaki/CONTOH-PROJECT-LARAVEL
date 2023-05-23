<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <h1 style="color: blueviolet">HALAMAN HOME</h1>
    @php
$nama = "Budi";
$nilai = 59.99;
@endphp
{{-- struktur kendali if --}}
@if ($nilai >= 60) 
@php $ket = "Lulus"; @endphp
@else
@php $ket = "Gagal"; @endphp
@endif
Siswa {{ $nama }} dengan nilai {{ $nilai }}
dinyatakan {{ $ket }}



@php
$nama1 = "bambang";
$nilai1 = 60;

if($nilai >= 60){
    $ket = "Lulus";
}else{
    $ket = "Gagal";
}
@endphp

<br>
<br> 

Siswa {{ $nama1 }} dengan nilai {{ $nilai1 }} dinyatakan {{ $ket }}






</body>
</html>