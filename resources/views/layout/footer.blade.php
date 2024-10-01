
    
    <!-- container-scroller -->
    <!-- plugins:js -->
 <!-- JS Files -->
 <script src="{{ asset('crm/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('crm/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('crm/assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('crm/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('crm/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('crm/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('crm/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->


    <script>
      function formatDate(date) {
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        return new Intl.DateTimeFormat('en-US', options).format(date);
      }
    
      const today = new Date();
      const startDate = formatDate(today);
      const endDate = formatDate(today);
    
      document.getElementById('date-range').textContent = `${startDate} - ${endDate}`;
    </script>
  </body>
</html>