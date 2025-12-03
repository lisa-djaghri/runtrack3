document.getElementById("button").addEventListener("click", () => {
    fetch("expression.txt")
        .then(response => response.text())
        .then(data => {
            document.getElementById("resultat").textContent = data;
        });
});