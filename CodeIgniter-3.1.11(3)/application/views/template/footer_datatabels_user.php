<script type="text/javascript">
$(document).ready( function () {
    tampil_data_mahasiswa();
    $('#list_mhs').DataTable();

    function tampil_data_mahasiswa(){
				$.ajax({
					type  : 'ajax',
					url   : '<?php echo base_url()?>user/data_mahasiswa',
					async : false,
					dataType : 'json',
					success : function(data){
						var html = '';
						var i;
						for(i=1; i<data.length; i++){
							html += '<tr>'+
									'<td>'+ i +'</td>'+
									'<td>'+data[i].nama+'</td>'+
									'<td>'+data[i].email+'</td>'+
									'<td>'+data[i].jurusan+'</td>'+
									'</tr>';
						}
						$('#show_data').html(html);
					}
				});
			}
} );
</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>