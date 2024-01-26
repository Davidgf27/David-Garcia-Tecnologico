const body = document.body;
    body.append("Este es un texto agregado con append al body")
    const br = document.createElement("br");
    body.append(br);
    const texto = document.createTextNode("Para agregar texto con appendChild se debe crear un nodo de texto primero")
    body.appendChild(texto);
    const div = document.createElement("div")
    body.appendChild(div);
    const p1 = document.createElement("p");
    const p2 = document.createElement("p");
    const p3 = document.createElement("p");
    p1.textContent="Parrafo con texto puesto con textContent"
    p2.innerHTML="Parrafo con innerHTML <br>";
    p3.textContent="Parrafos agregados a un div  con append(p1,p2,p3)"
    div.append(p1,p2,p3);