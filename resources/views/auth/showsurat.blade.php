<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
</head>

<body>
    @if (strtolower($jenisSurat) === 'akta_pendiri' ||
            strtolower($jenisSurat) === 'npwp_perusahaan' ||
            strtolower($jenisSurat) === 'ktp_pendiri')
        <?php $urlFromDatabase = auth()->user()->{$jenisSurat}; ?>
        <?php $basePathToRemove = "public/{$jenisSurat}/"; ?>
        <iframe height="740" width="100%"
            src="/storage/{{ $jenisSurat }}/{{ str_replace($basePathToRemove, '', $urlFromDatabase) }}"></iframe>
    @else
        <!-- Handle jika jenisSurat tidak sesuai -->
        <p>Jenis surat tidak valid.</p>
    @endif

</body>

</html>
