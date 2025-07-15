 document.querySelector("form").addEventListener("submit", function (e) {
    const nama = document.querySelector("input[name='nama']").value.trim();
    const pesan = document.querySelector("textarea[name='pesan']").value.trim();
    if (nama === "" || pesan === "") {
        alert("Nama dan pesan tidak boleh kosong!");
        e.preventDefault();
    }
});
