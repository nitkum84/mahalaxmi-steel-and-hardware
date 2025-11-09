<!-- container-scroller -->
<script src="https://cdn.tiny.cloud/1/10rl2z6h1un55kgelscfkpo56obx77pjxythpmwhhbgibic6/tinymce/5/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#mytextarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak ' +
        'searchreplace wordcount visualblocks visualchars code fullscreen ' +
        'insertdatetime media nonbreaking save table directionality ' +
        'emoticons template paste textpattern imagetools codesample toc help',
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
        menubar: 'file edit view insert format tools table help',
        toolbar_mode: 'floating',
    });
</script>
<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
<script src="{{ asset('datatables/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script>
<script>

    $(document).ready(function() {

        $('#example').DataTable();

      } );



    $(document).ready(function() {

        var table = $('#example2').DataTable( {

            lengthChange: false,

            buttons: [ 'copy', 'excel', 'pdf', 'print']

        } );



        table.buttons().container()

            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );

    } );



    // $('#fancy-file-upload').FancyFileUpload({

    //     params: {

    //         action: 'fileuploader'

    //     },

    //     maxfilesize: 1000000

    // });



    // $(document).ready(function () {

    //     $('#image-uploadify').imageuploadify();

    // })
    $(document).ready(function(){
    // Image preview
    $("#serviceImageInput").change(function(){
        readURL(this);
    });

    // Function to read URL and display image preview
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#serviceImagePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
});
</script>

