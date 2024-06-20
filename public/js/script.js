$('.delete').on('click', function(e) {
    e.preventDefault();

    Swal.fire({
        title: "Apakah anda yakin",
        text: "data mahasiswa akan dihapus",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#007BFF",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus Data!"
       }).then((result) => {
        if (result.isConfirmed) {
          $('.formd').submit();
        }
      });; 
});