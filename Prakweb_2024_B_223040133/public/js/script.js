$(function() {

    $('.TombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer buton[type-submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah')
    })

    $('.tampilModalUbah').on('Click', function() {

        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer buton[type-submit]').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
           
            succes: function(data) {
                $('nama').val(data.nama);
                $('nrp').val(data.nrp);
                $('jurusan').val(data.jurusan);
                $('email').val(data.email);
                $('id').val(data.id);
                
            }
        });

    });

});