<script>
    window.setTimeout(function () {
        $("#dismiss")
            .fadeIn(3000, 1)
            .fadeOut(5000, function () {
                $(this).remove();
            });
      }, 2000);
  </script>
  <!--   Core JS Files   -->
  @yield('script')
  <script src="/../assets/admin/js/core/popper.min.js"></script>
  <script src="/../assets/admin/js/core/bootstrap.min.js"></script>
  <script src="/../assets/admin/js/plugins/smooth-scrollbar.min.js"></script>

  {{-- <script type="text/javascript">
    $(document).ready(function(){
      $('#appointInfo').click(function(){
        var appointId = $(this).data('id');
        alert(appointId);
      });
    });
  </script> --}}

  