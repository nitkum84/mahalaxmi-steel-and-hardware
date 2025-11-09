@if($message = Session::get('success'))
 <!-- Add SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ $message }}",
            icon: "success",
            confirmButtonText: "Okay",
            showCloseButton: true,
            closeOnClickOutside: false,
            timer: 8000,
            timerProgressBar: true,
            toast: true,
            position: "center",
            didOpen: function (toast) {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
        }).then(function(result) {
            // Handle the button click event if needed
            if (result.isConfirmed) {
                // Redirect or perform any other action
            }
        });
    </script>
@endif
