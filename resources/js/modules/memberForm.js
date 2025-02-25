(() => {
    function toggleMemberDetails() {
        const isMemberChecked = document.getElementById("member").checked;
        const memberDetails = document.getElementById("member_details");
        const categoryOptions = document.querySelectorAll(".toggle_category");

        memberDetails.style.display = isMemberChecked ? "flex" : "none";

        categoryOptions.forEach(option => {
            option.hidden = !isMemberChecked; // Jika isMemberChecked = true, tampilkan
        });
    }

    // Panggil saat halaman dimuat
    toggleMemberDetails();

    // Tambahkan event listener
    document.getElementById("member").addEventListener("change", toggleMemberDetails);
    document.getElementById("member2").addEventListener("change", toggleMemberDetails);
})();
