<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angerlo's Nieuws Article</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general-style.css') }}">
</head>
<body class="col">
    <x-header/>
    <object data="pdf/februari.pdf" type="application/pdf" class="flex1" width="100%"> <!-- in data="..." moet pdf -->
        <p>Gefaald om PDF file te laten zien. 
            <br><a href="pdf/februari.pdf" download>Klik hier om PDF file te dowloaden.</a> <!-- in herf="..." moet pdf -->
        </p>
    </object>
</body>
</html>