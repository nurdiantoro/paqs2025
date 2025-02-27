(() => {
    document.addEventListener("DOMContentLoaded", function () {
    const activityInputs = document.querySelectorAll("input[name='activity']");
    const activityDivs = {
        "activity-1": document.getElementById("activity1_active"),
        "activity-2": document.getElementById("activity2_active"),
        "activity-3": document.getElementById("activity3_active"),
        "activity-4": document.getElementById("activity4_active"),
        "activity-5": document.getElementById("activity5_active"),
    };

    activityInputs.forEach(input => {
        input.addEventListener("change", function () {
            // Sembunyikan semua div terlebih dahulu
            Object.values(activityDivs).forEach(div => {
                if (div) div.classList.add("hidden");
            });

            // Tampilkan div yang sesuai dengan input yang dipilih
            if (this.checked && activityDivs[this.id]) {
                activityDivs[this.id].classList.remove("hidden");
            }
        });
    });
});

})();
