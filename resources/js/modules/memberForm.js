(() => {
    document.addEventListener("DOMContentLoaded", function () {
        const memberYes = document.getElementById("member");
        const memberNo = document.getElementById("member2");
        const memberDetails = document.getElementById("member_details");

        function toggleMemberDetails() {
            if (memberYes.checked) {
                console.log(memberYes.checked);
                memberDetails.style.display = "flex"; // Tampilkan jika "Yes" dipilih
            } else {
                console.log(memberNo.checked);
                memberDetails.style.display = "none"; // Sembunyikan jika "No" dipilih
            }
        }

        // Panggil saat halaman dimuat untuk menangani old value dari Laravel
        toggleMemberDetails();

        // Tambahkan event listener untuk perubahan pada radio button
        memberYes.addEventListener("change", toggleMemberDetails);
        memberNo.addEventListener("change", toggleMemberDetails);
    });

})();
