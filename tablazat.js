function rendez() {
    const tabla = document.getElementById("adatok");
    const sorok = Array.from(tabla.rows).slice(1);
    sorok.sort((a, b) => parseInt(a.cells[1].innerText) - parseInt(b.cells[1].innerText));
    for (const sor of sorok) {
      tabla.appendChild(sor);
    }
  }
  