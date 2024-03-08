// Dismiss Alert
setTimeout(function() {
    document.getElementById("autoDismissAlert").style.display = "none";
}, 3000);


//edit Sejarah
function editSejarah(id, judul, dekripsi, visi, misi) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idsejarah").val(id).prop('readonly', true);
    $("#judul").val(judul);
    $("#dekripsi").val(dekripsi);
    $("#visi").val(visi);
    $("#misi").val(misi);
    $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto").removeAttr("required");

    var tabEditLi = document.getElementById('tab-edit-li');
    tabEditLi.style.display = 'block';
    $("#proses").val("Update");
}

//edit pengurus
function editPengurus(id, nama, jabatan) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idpengurus").val(id).prop('readonly', true);
    $("#nama").val(nama);
    $("#jabatan").val(jabatan);
    $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto").removeAttr("required");

    $("#proses").val("Update");
}

// // Hapus Value Kategori

function editKategori(id, kategori) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idkategori").val(id);
    $("#kategori").val(kategori);
    $("#proses").val("Update");
}

$("#custom-tab-tambah-edit").on("click", function() {
    $("#idkategori").val("");
    $("#kategori").val("");
    $("#proses").val("Tambah");
});

function editBerita(id, judul, isi, kategori) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idberita").val(id);
    $("#judul").val(judul);
    $("#isi").summernote("code", isi);
    $("#kategori").val(kategori);
    $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto").removeAttr("required");
    $("#notifPassword_1").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto_tambahan").removeAttr("required");

    $("#proses").val("Update");
}


function editGaleri(id, nama) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idgaleri").val(id);
    $("#nama").val(nama);
    $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto").removeAttr("required");

    $("#proses").val("Update");
}

function editSlider(id, judul, deskripsi) {
    $('[href="#tab-tambah-edit"]').tab("show");
    $("#idslider").val(id);
    $("#judul").val(judul);
    $("#deskripsi").val(deskripsi);
    $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
    $("#foto").removeAttr("required");


    var tabEditLi = document.getElementById('tab-edit-li');
    tabEditLi.style.display = 'block';

    $("#proses").val("Update");
}

// // Edit Pengguna
// function editPetugas(id, nama, username, password) {
//     $('[href="#tab-tambah-edit"]').tab("show");
//     $("#id").val(id);
//     $("#nama").val(nama);
//     $("#username").val(username);
//     $("#password_lama").val(password);
//     $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Password");
//     $("#password").removeAttr("required");
//     $("#proses").val("Update");
// }

// // Tambah Value Petugas
// $("#tambah-edit-tab").on("click", function() {
//     $("#id").val("");
//     $("#nama").val("");
//     $("#username").val("");
//     $("#email").val("");
//     $("#level").val("Petugas");
//     $("#notifPassword").empty();
//     $("#password").prop("required", true);
//     $("#proses").val("Tambah");
// });

// // Edit Rontgen
// function editRontgen(no, id_pasien, tgl, jenis, detail, nama) {
//     $('[href="#tab-tambah-edit"]').tab("show");
//     $("#idpemeriksaan").val(no).prop('readonly', true);
//     document.getElementById("text-pasien").style.display = "";
//     document.getElementById("idpasienselect").style.display = "none";
//     document.getElementById("pasien").style.display = "";
//     $("#pasien").prop("type", "text").prop("readonly", true).val(id_pasien + ' - ' + nama);
//     $("#tgl_pemeriksaan").val(tgl);
//     $("#jenis_pemeriksaan").val(jenis);
//     $("#detail_pemeriksaan").val(detail);
//     $("#notifPassword").text("*Kosongkan Jika Tidak Ingin Merubah Gambar");
//     $("#foto_rontgen").removeAttr("required");
//     $("#proses").val("Update");
// };

// $("#custom-tab-tambah-edit").on("click", function() {
//     $("#idpemeriksaan").val("").prop('readonly', false);
//     document.getElementById("text-pasien").style.display = "none";
//     document.getElementById("idpasienselect").style.display = "";
//     document.getElementById("pasien").style.display = "none";
//     $("#tgl_pemeriksaan").val("");
//     $("#jenis_pemeriksaan").val("");
//     $("#detail_pemeriksaan").val("");
//     $("#foto_rontgen").prop("required", true);
//     $("#notifPassword").empty();
//     $("#proses").val("Tambah");
// });