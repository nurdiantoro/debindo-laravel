// new DataTable('#example');
new DataTable('#table_youtube');
new DataTable('#table_event_carousel');
// new DataTable('#table_team');
new DataTable('#table_event', {
    order: [
        [3, 'des']
    ]
});

$(document).ready(function () {
    $('.edit-btn').click(function () {
        var userId = $(this).data('id');
        // Fetch user data and populate modal fields via AJAX
        $.ajax({
            url: '/users/' + userId + '/edit',
            type: 'GET',
            success: function (response) {
            success: function (response) {
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

    $('.tombol_edit_team').click(function () {
        console.log('test');
    });


    // Modal Edit Youtube
    $('.tombol_edit_youtube').on('click', function () {
        console.log('Tombol Edit Youtube ditekan');
        var id = $(this).data('id');
        var title = $(this).data('title');
        var thumbnail = $(this).data('thumbnail');
        var link = $(this).data('link');
        $('#edit_id').val(id);
        $('#edit_title').val(title);
        $('#edit_thumbnail').val(thumbnail);
        $('#edit_link').val(link);
    });

    // Modal Edit Event Carousel
    $('.tombol_edit_event_carousel').on('click', function () {
    // Modal Edit Event Carousel
    $('.tombol_edit_event_carousel').on('click', function () {
        console.log('Tombol Edit Event Carousel ditekan');
        var id = $(this).data('id');
        var title = $(this).data('title');
        var subtitle = $(this).data('subtitle');
        var foto = $(this).data('foto');
        var urutan = $(this).data('urutan');

        // console.log(id,title,subtitle,foto,urutan)

        $('#edit_id_event').val(id);
        $('#edit_title_event').val(title);
        $('#edit_subtitle_event').val(subtitle);
        $('#edit_foto_event').val(foto);
        $('#edit_urutan_event').val(urutan);
    });

    // Modal Edit Testimoni
    $('.tombol_edit_testimoni').on('click', function () {
        console.log('Tombol Edit Testimoni ditekan');
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var jabatan = $(this).data('jabatan');
        var testimoni = $(this).data('testimoni');
        var foto = $(this).data('foto');

        // console.log(id,nama,jabatan,testimoni)

        $('#edit_id_testimoni').val(id);
        $('#edit_nama_testimoni').val(nama);
        $('#edit_jabatan_testimoni').val(jabatan);
        $('#edit_testimoni_testimoni').val(testimoni);
        $('#edit_foto_testimoni').val(foto);
    });

    // Modal Edit Event
    $('.tombol_edit_event').on('click', function () {
        console.log('Tombol edit Event ditekan');
        var id = $(this).data('id');
        var judul = $(this).data('judul');
        var tgl_mulai = $(this).data('tgl_mulai');
        var tgl_selesai = $(this).data('tgl_selesai');
        var lokasi = $(this).data('lokasi');
        var kota = $(this).data('kota');
        var addition = $(this).data('addition');
        var link = $(this).data('link');
        var logo = $(this).data('logo');
        var eo = $(this).data('eo');
        var deskripsi = $(this).data('deskripsi');

        console.log(id,judul,tgl_mulai,tgl_selesai,lokasi,kota,addition,link,logo,eo,deskripsi)

        $('#edit_id').val(id);
        $('#edit_judul').val(judul);
        $('#edit_tgl_mulai').val(tgl_mulai);
        $('#edit_tgl_selesai').val(tgl_selesai);
        $('#edit_lokasi').val(lokasi);
        $('#edit_kota').val(kota);
        $('#edit_addition').val(addition);
        $('#edit_link').val(link);
        $('#edit_logo').val(logo);
        $('#edit_eo').val(eo);
        $('#edit_deskripsi').val(deskripsi);
    });

    // Modal Edit News
    $('.tombol_edit_news').on('click', function () {
        console.log('Tombol edit News ditekan');
        var id = $(this).data('id');
        var judul = $(this).data('judul');
        var tgl_post = $(this).data('tgl_post');
        var nama_penulis = $(this).data('nama_penulis');
        var isi = $(this).data('isi');
        var image = $(this).data('image');
        $('#edit_id').val(id);
        $('#edit_judul').val(judul);
        $('#edit_tgl_post').val(tgl_post);
        $('#edit_nama_penulis').val(nama_penulis);
        $('#edit_isi').val(isi);
        $('#edit_image').val(image);
    });

    // Modal Edit Career
    $('.tombol_edit_career').on('click', function () {
        console.log('Tombol edit Career ditekan');
        var id = $(this).data('id');
        var jabatan = $(this).data('jabatan');
        var deskripsi = $(this).data('deskripsi');
        $('#edit_id').val(id);
        $('#edit_jabatan').val(jabatan);
        $('#edit_deskripsi').val(deskripsi);
    });

    // Modal Edit Team
    $('.tombol_edit_team').on('click', function () {
        console.log('Tombol edit Team ditekan');
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var jabatan = $(this).data('jabatan');
        var tingkat_jabatan = $(this).data('tingkat_jabatan');
        var email = $(this).data('email');
        var linkedin = $(this).data('linkedin');
        var foto = $(this).data('foto');

        // console.log(id,title,subtitle,foto,urutan)

        $('#edit_id_event').val(id);
        $('#edit_title_event').val(title);
        $('#edit_subtitle_event').val(subtitle);
        $('#edit_foto_event').val(foto);
        $('#edit_urutan_event').val(urutan);
    });

    // Modal Edit Testimoni
    $('.tombol_edit_testimoni').on('click', function () {
        console.log('Tombol Edit Testimoni ditekan');
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var jabatan = $(this).data('jabatan');
        var testimoni = $(this).data('testimoni');
        var foto = $(this).data('foto');

        // console.log(id,nama,jabatan,testimoni)

        $('#edit_id_testimoni').val(id);
        $('#edit_nama_testimoni').val(nama);
        $('#edit_jabatan_testimoni').val(jabatan);
        $('#edit_testimoni_testimoni').val(testimoni);
        $('#edit_foto_testimoni').val(foto);
    });

    // Modal Edit Event
    $('.tombol_edit_event').on('click', function () {
        console.log('Tombol edit Event ditekan');
        var id = $(this).data('id');
        var judul = $(this).data('judul');
        var tgl_mulai = $(this).data('tgl_mulai');
        var tgl_selesai = $(this).data('tgl_selesai');
        var lokasi = $(this).data('lokasi');
        var kota = $(this).data('kota');
        var addition = $(this).data('addition');
        var link = $(this).data('link');
        var logo = $(this).data('logo');
        var eo = $(this).data('eo');
        var deskripsi = $(this).data('deskripsi');

        console.log(id,judul,tgl_mulai,tgl_selesai,lokasi,kota,addition,link,logo,eo,deskripsi)

        $('#edit_id').val(id);
        $('#edit_judul').val(judul);
        $('#edit_tgl_mulai').val(tgl_mulai);
        $('#edit_tgl_selesai').val(tgl_selesai);
        $('#edit_lokasi').val(lokasi);
        $('#edit_kota').val(kota);
        $('#edit_addition').val(addition);
        $('#edit_link').val(link);
        $('#edit_logo').val(logo);
        $('#edit_eo').val(eo);
        $('#edit_deskripsi').val(deskripsi);
    });

    // Modal Edit News
    $('.tombol_edit_news').on('click', function () {
        console.log('Tombol edit News ditekan');
        var id = $(this).data('id');
        var judul = $(this).data('judul');
        var tgl_post = $(this).data('tgl_post');
        var nama_penulis = $(this).data('nama_penulis');
        var isi = $(this).data('isi');
        var image = $(this).data('image');
        $('#edit_id').val(id);
        $('#edit_judul').val(judul);
        $('#edit_tgl_post').val(tgl_post);
        $('#edit_nama_penulis').val(nama_penulis);
        $('#edit_isi').val(isi);
        $('#edit_image').val(image);
    });

    // Modal Edit Career
    $('.tombol_edit_career').on('click', function () {
        console.log('Tombol edit Career ditekan');
        var id = $(this).data('id');
        var jabatan = $(this).data('jabatan');
        var deskripsi = $(this).data('deskripsi');
        $('#edit_id').val(id);
        $('#edit_jabatan').val(jabatan);
        $('#edit_deskripsi').val(deskripsi);
    });

    // Modal Edit Team
    $('.tombol_edit_team').on('click', function () {
        console.log('Tombol edit Team ditekan');
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var jabatan = $(this).data('jabatan');
        var tingkat_jabatan = $(this).data('tingkat_jabatan');
        var email = $(this).data('email');
        var linkedin = $(this).data('linkedin');
        var foto = $(this).data('foto');
        $('#edit_id').val(id);
        $('#edit_nama').val(nama);
        $('#edit_jabatan').val(jabatan);
        $('#edit_tingkat_jabatan').val(tingkat_jabatan);
        $('#edit_email').val(email);
        $('#edit_linkedin').val(linkedin);
        $('#edit_nama').val(nama);
        $('#edit_jabatan').val(jabatan);
        $('#edit_tingkat_jabatan').val(tingkat_jabatan);
        $('#edit_email').val(email);
        $('#edit_linkedin').val(linkedin);
        $('#edit_foto').val(foto);
    });
});
