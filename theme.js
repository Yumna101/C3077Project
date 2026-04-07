document.addEventListener("DOMContentLoaded", () => {
    const themeSelector = document.getElementById("theme-selector");
    const themeLink = document.getElementById("theme-link");

    // Load the saved theme from localStorage
    const savedTheme = localStorage.getItem("selectedTheme");
    if (savedTheme) {
        themeLink.href = savedTheme;
        if (themeSelector) themeSelector.value = savedTheme;
    }

    // If there's a theme selector on the page, listen for changes
    if (themeSelector) {
        themeSelector.addEventListener("change", function() {
            const selectedTheme = this.value;
            themeLink.href = selectedTheme;

            // Save the selected theme in localStorage
            localStorage.setItem("selectedTheme", selectedTheme);
        });
    }
});
