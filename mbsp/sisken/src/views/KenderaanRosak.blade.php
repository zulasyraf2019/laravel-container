<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBSP Sisken API Integration</title>
</head>
<body>
    <h1>Senarai Kenderaan Rosak</h1>
    <ol>
        @foreach($responses as $res)
        <li style="border: 1px solid gray; padding: 20px; width: 50%; line-height: 30px; margin-bottom: 15px;">
            <div>No Plat: <span style="color: blue;">{{ $res->noPlat }}</span></div>
            <div>Jenis Kenderaan: <span style="color: blue;">{{ $res->jenisKenderaan }}</span></div>
            <div>Jabatan: <span style="color: blue;">{{ $res->jabatan }}</span></div>
            <div>Keterangan Kerosakan: <span style="color: blue;">{{ $res->keteranganKerosakan }}</span></div>
            <div>Tarikh Permohonan: <span style="color: blue;">{{ $res->tarikhPermohonan }}</span></div>
            <div>Tarikh Arahan: <span style="color: blue;">{{ $res->tarikhArahan }}</span></div>
            <div>Tempoh Selenggara: <span style="color: blue;">{{ $res->tempohSelenggara }}</span></div>
            <div>Lokasi Selenggara: <span style="color: blue;">{{ $res->lokasiSelenggara }}</span></div>
        </li>
        @endforeach
    </ol>
</body>
</html>