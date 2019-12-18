$(function(){
	$('.edit').on('click',function(){
		$('#newTambahModalLabel').html('Ubah Data Cabang');
		$('.modal-footer button[type=submit]').html('Ubah');

		const id = $(this).data('id');

		$.ajax({
			url : 'http://localhost/sistem/manajemen/ubah',
			data : {id : id},
			method : 'post',
			dataType : 'json',
			success : function(data){
				$('#cabang_nama').val(data.cabang_nama);
                $('#alamat').val(data.alamat);
                $('#no_telp').val(data.no_telp);
                $('#id').val(data.id);
			}
		});
	});
	$('.tambah').on('click',function(){
		$('#newTambahModalLabel').html('Tambah Data Cabang');
		$('.modal-footer button[type=submit]').html('Tambah');
	});
});
