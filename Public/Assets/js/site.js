// "use strict";
// let th = document.getElementsByTagName("th")[0];
// th.addEventListener("click", getData);

// function getData(e) {
//     console.log(e.target)
//     const tabla = document.getElementById('table');
//     const datos = [];

//     const filas = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
//     for (let i = 0; i < filas.length; i++) {
//         const fila = filas[i];
//         const celdas = fila.getElementsByTagName('td');
//         const objetoFila = {
//             id: parseInt(celdas[0].innerText),
//             nombre: celdas[1].innerText,
//             price: parseFloat(celdas[2].innerText),
//             amount: parseInt(celdas[3].innerText)
//         };
//         datos.push(objetoFila);
//     }
//     console.log(datos);
// }