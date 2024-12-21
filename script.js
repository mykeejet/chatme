document.addEventListener("DOMContentLoaded", () => {
    const loadingContainer = document.querySelector(".loading-container");
    const helloWorld = document.querySelector(".hello-world");

    setTimeout(() => {
        loadingContainer.style.display = "none";
        helloWorld.style.display = "block";
    }, 3000); // Show "Hello, World!" after 3 seconds
});
