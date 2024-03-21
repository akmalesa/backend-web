 <!-- /.content-wrapper -->

 <footer class="main-footer">
     <div class="float-right d-none d-sm-block">
         <b>Version</b> 3.1.0
     </div>
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="{{ asset ('adminlte3') }}/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset ('adminlte3') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset ('adminlte3') }}/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset ('adminlte3') }}/dist/js/demo.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/datatables/jquery.dataTables.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/sweetalert2/sweetalert2.all.js"></script>
 <script src="{{ asset ('adminlte3') }}/plugins/sweetalert2/sweetalert2.js"></script>
 <!-- <script>
     $('#tbl-data-produk').DataTable()

     $('.delete-data').on('click', function(e) {
         e.preventDefault()
         const data = $(this).closest('tr').find('td:eq(1)').text()
         Swal.fire({
             title: `Apakah data <span style="color:red">${data}</span> akan dihapus?`,
             text: "Data tidak bisa dikembalikan!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             confirmButtonText: 'Ya, hapus data ini!'
         }).then((result) => {
             if (result.isConfirmed)
                 $(e.target).closest('form').submit()
             else swal.close()
         })
     })
 </script> -->
 @stack('script')
 </body>

 </html>