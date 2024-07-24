<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>Arcanetion</title>

    {{-- Load Bootstrap --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Loadin fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Include html5-qrcode library -->
    <script src="https://cdn.jsdelivr.net/npm/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <!-- Include jQuery for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #qrScanner {
            width: 100%;
            height: auto;
            display: none;
        }

        #reader {
            width: 500px;
            height: 386px;
            margin: 1px -128px;
        }
    </style>

</head>

<body>

    @yield('content')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/instascan.min.js') }}"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('scanButton').addEventListener('click', function() {
                if (typeof Html5Qrcode === 'undefined') {
                    alert('Html5Qrcode is not loaded. Please check the script URL.');
                    return;
                }

                const html5QrCode = new Html5Qrcode("reader");
                html5QrCode.start({
                            facingMode: "environment"
                        }, // Use rear camera
                        {
                            fps: 10, // Optional, frame per second for qr code scanning
                            qrbox: 250 // Optional, if you want bounded box UI
                        },
                        qrCodeMessage => {
                            // handle the scanned code as you like
                            alert(`QR Code detected: ${qrCodeMessage}`);

                            // AJAX call to store QR code result
                            $.ajax({
                                url: '/qr-code-result',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    result: qrCodeMessage
                                },
                                success: function(response) {
                                    alert(response.success);
                                },
                                error: function(xhr) {
                                    alert(
                                        'An error occurred while storing the QR code result.'
                                    );
                                }
                            });

                            html5QrCode.stop().then(ignore => {
                                // QR Code scanning is stopped.
                            }).catch(err => {
                                // Stop failed
                            });
                        },
                        errorMessage => {
                            // parse error
                        })
                    .catch(err => {
                        // Start failed
                    });
            });
        });
    </script>
</body>

</html>
