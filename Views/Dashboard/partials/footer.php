 <!-- Essential javascripts for application to work-->
 <script>
    let BASE_URL = "<?= BASE_URL?>";
 </script>

<script src="<?= BASE_MEDIA?>js/jquery-3.7.1.min.js"></script>
<script src="<?= BASE_MEDIA?>js/popper.min.js"></script>
<script src="<?= BASE_MEDIA?>js/bootstrap.min.js"></script>
<script src="<?= BASE_MEDIA?>js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
 <!-- The javascript plugin to display page loading on top-->
 <script src="<?= BASE_MEDIA?>js/plugins/pace.min.js"></script>
  <script src="<?= BASE_MEDIA?>js/resource/user/index.js"></script>
 <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>