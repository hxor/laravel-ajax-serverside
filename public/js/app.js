$('.show-modal').click(function(event) {
    event.preventDefault();

    var url = $(this).attr('href'); //mengambil route create untuk menampilkan form
    $.ajax({
        url: url, //url dari route di simpan dari attribut href ke variabel url
        dataType: 'html', //data yang dikeluarkan berupa html / form input berupa tag html
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});