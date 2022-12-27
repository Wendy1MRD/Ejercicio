
let url = "/api/categorias"


fetch(url)
    .then(response => response.json())
    .then(data => cargarDatos(data))
    .catch(error => console.log(error))

const cargarDatos = (data) => {

    let body = " ";
    for (let i = 0; i < data.length; i++) {

        body += "<tr>"+
                    "<td>"+data[i].idCategoria+"</td>"+
                    "<td>"+data[i].categoria+"</td>"+
                    "<td>"+data[i].descripcion+"</td>"+
                    "<td><button class='btn btn-warning editar' value='"+data[i].idCategoria+"' id='"+data[i].idCategoria+ "'>Editar</button></td>"+
                    "<td><button class='btn btn-danger borrar' value='"+data[i].idCategoria+"' id='"+data[i].idCategoria+ "'> Eliminar </button> </td>"+
                "</tr>" 
    }
        document.getElementById("datos").innerHTML = body;
    }

