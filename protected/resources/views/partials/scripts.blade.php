<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<!-- DATA TABES SCRIPT -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>

<!-- CK Editor // untuk text editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5-->
<script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

<script src="{{ asset('/plugins/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('/js/video_upload.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/video_upload_cover.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/video_upload_gallery.js') }}" type="text/javascript"></script>


<script src="{{ asset('/js/video_upload_e.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/video_upload_gallery_e.js') }}" type="text/javascript"></script>


<script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script type="text/javascript">

    $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});


    // preview upload / browse image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    
</script>