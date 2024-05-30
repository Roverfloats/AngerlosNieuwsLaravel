<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws Archive</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/archive-style.css') }}">
</head>

<body>
    <x-header />

    <div class="container content-archive">
        <div class="wrap">

        </div>
    </div>

    {{-- <script>
        function updateColumnGap() {
            const container = document.querySelector('.wrap');
            const containerWidth = container.clientWidth;
            const itemWidth = 315;
            const minGap = 20;
            const itemsPerRow = Math.floor(containerWidth / (itemWidth + minGap));
            const totalItemsWidth = itemsPerRow * itemWidth;
            const remainingSpace = containerWidth - totalItemsWidth;
            const newGap = remainingSpace / (itemsPerRow - 1);
            container.style.columnGap = `${Math.max(newGap, minGap)}px`;
        }

        window.addEventListener('resize', updateColumnGap);
        document.addEventListener('DOMContentLoaded', updateColumnGap);
    </script> --}}
</body>

</html>
