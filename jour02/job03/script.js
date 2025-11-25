function addone() {
    const p = document.getElementById("compteur");
    p.textContent = Number(p.textContent) + 1;
}

document.getElementById("button").addEventListener("click", addone);