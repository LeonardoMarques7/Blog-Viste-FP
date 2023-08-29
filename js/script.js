const styleToggle = document.getElementById("style-toggle");
const styleLink = document.getElementById("style-link");
const toggleImage = document.getElementById("img");

document.addEventListener("DOMContentLoaded", () => {
    // Verifique se já há uma escolha armazenada no Local Storage
    const storedStyle = localStorage.getItem("selectedStyle");
    if (storedStyle === "dark") {
        styleToggle.checked = true;
        styleLink.href = "./css/style-escuro.css";
        toggleImage.src = toggleImage.getAttribute("data-dark-image");
    }

    document.body.style.display = "block";
});

styleToggle.addEventListener("change", () => {
    if (styleToggle.checked) {
        styleLink.href = "./css/style-escuro.css";
        toggleImage.src = toggleImage.getAttribute("data-dark-image");
        localStorage.setItem("selectedStyle", "dark"); // Armazene a escolha no Local Storage
    } else {
        styleLink.href = "./css/style.css";
        toggleImage.src = "./img/modo-escuro.png"; // Imagem do modo claro
        localStorage.removeItem("selectedStyle"); // Remova a escolha do Local Storage
    }
});


// Habilitado 

// styleLink.href = "../css/style-escuro.css";
// toggleImage.src = toggleImage.getAttribute("data-dark-image");

// Desabilitado

// styleLink.href = "../css/style.css";
// toggleImage.src = "../img/modo-escuro.png";