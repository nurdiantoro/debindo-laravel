$(document).ready(function(){
    $('.edit-btn').click(function(){
        var userId = $(this).data('id');
        // Fetch user data and populate modal fields via AJAX
        $.ajax({
            url: '/users/' + userId + '/edit',
            type: 'GET',
            success: function(response){
                $('#userId').val(response.user.id);
                $('#logo').val(response.user.logo);
                $('#judul').val(response.user.judul);
                $('#tgl_mulai').val(response.user.tgl_mulai);
                $('#tgl_selesai').val(response.user.tgl_selesai);
                $('#lokasi').val(response.user.lokasi);
                $('#addition').val(response.user.addition);
                $('#eo').val(response.user.eo);
            }
        });
    });
});


// Modal Edit Event Carousel
$(document).ready(function() {
    $('.tombol_edit_event_carousel').on('click', function() {
        console.log('Tombol Edit Event Carousel ditekan');
        var id = $(this).data('id');
        var title = $(this).data('title');
        var subtitle = $(this).data('subtitle');
        var foto = $(this).data('foto');
        var urutan = $(this).data('urutan');
        $('#edit_id').val(id);
        $('#edit_title').val(title);
        $('#edit_subtitle').val(subtitle);
        $('#edit_foto').val(foto);
        $('#edit_urutan').val(urutan);
    });
});
