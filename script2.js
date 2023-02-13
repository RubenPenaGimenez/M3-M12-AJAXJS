//--------------------------------------------------------------------------\\

function getServicesByID(idService) {
    let url = "http://localhost:8080/servicios/" + idService;
    fetch(url).then((response) => {
        return response.json();
    })
        .then((data) => {
            let servicios = data;
            document.getElementById("descripcion").innerHTML = servicios.descripcion;
            document.getElementById("rango_precio").innerHTML = servicios.rango_precio;
        })
        .catch(function (error) {
            console.log(error);
        });
}

getServicesByID(1);

//--------------------------------------------------------------------------\\

function getServicesByID2(idService2) {
    let url = "http://localhost:8080/servicios/" + idService2;
    fetch(url).then((response) => {
        return response.json();
    })
        .then((data) => {
            let servicios2 = data;
            document.getElementById("descripcion2").innerHTML = servicios2.descripcion;
            document.getElementById("rango_precio2").innerHTML = servicios2.rango_precio;
        })
        .catch(function (error) {
            console.log(error);
        });
}

getServicesByID2(2);

//--------------------------------------------------------------------------\\

function getServicesByID3(idService3) {
    let url = "http://localhost:8080/servicios/" + idService3;
    fetch(url).then((response) => {
        return response.json();
    })
        .then((data) => {
            let servicios3 = data;
            document.getElementById("descripcion3").innerHTML = servicios3.descripcion;
            document.getElementById("rango_precio3").innerHTML = servicios3.rango_precio;
        })
        .catch(function (error) {
            console.log(error);
        });
}

getServicesByID3(3);

//--------------------------------------------------------------------------\\

/*
function getServices() {
    let url = "http://localhost:8080/servicios/";
    let ul = document.getElementById('services');
    let list = document.createDocumentFragment();
    fetch(url).then((response) => {
        return response.json();
    })
        .then((data) => {
            let servicios4 = data;
            servicios4.forEach(element => {
                //console.log(element.attributes.Nombre);
                let li = document.createElement('li');
                let desc = document.createElement('h2');
                let rango = document.createElement('span');
                desc.innerHTML = servicios4.descripcion;
                rango.innerHTML = servicios4.rango_precio;
                li.appendChild(desc);
                li.appendChild(id);
                list.appendChild(li);
                ul.appendChild(list);
            });
        })
        .catch(function (error) {
            console.log(error);
        });
}

getServices();
*/

//--------------------------------------------------------------------------\\

function updateServicio(idService4) {
    const urlS = 'http://localhost:8080/servicios/' + idService4;
    console.log("Actualización Servicio");
    let peticion = new peticion(urlS, {
        method: 'PUT',
        body: JSON.stringify(data),
        headers: new Headers({
            'Content-Type': 'application/json; charset=UTF-8'
        })
    }); fetch(peticion)
        .then(function () {
            // Handle response you get from the API
            console.log(peticion);
        }).catch(function (error) {
            console.log(error);
            alert("No se ha podido modificar los datos del servicio");
        });
}

//--------------------------------------------------------------------------\\

function createServicio(data) {
    const urlP = 'http://localhost:8080/servicios/';
    console.log("Post Servicio");
    let request = new request(urlP, {
        method: 'POST',
        body: JSON.stringify(data),
        headers: new Headers({
            'Content-Type': 'application/json; charset=UTF-8'
        })
    }); fetch(request)
        .then(function () {
            // Handle response you get from the API
            console.log(request);
        }).catch(function (error) {
            console.log(error);
            alert("No se ha podido CREAR el servicio");
        });
}

//--------------------------------------------------------------------------\\

function deleteService(idService) {
    const url = "http://localhost:8080/servicios/" + idService;
    let request = new Request(url, {method: 'DELETE'});

fetch(request)
  .then(function() {
    // Handle response you get from the API
    console.log(request);
  }).catch(function (error) {
        console.log(error);
        alert("No se ha podido eliminar el servicio");
  });
}

//--------------------------------------------------------------------------\\

function createServicio() {

    let servicio = {
        descripcion: document.getElementById("descripcion").value,
        rango_precio: document.getElementById("rango_precio").value
    };

    console.log(servicio);
    createServicio(servicio);
    window.location.href = "../servicios.html";
}

//--------------------------------------------------------------------------\\

/*
function modificarServicio() {
    let servicio2 = {
        id: document.getElementById("id").value,
        descripcion: document.getElementById("descripcion").value,
        rango_precio: document.getElementById("rango_precio").value
    };

    console.log(servicio2);
    updateServicio(servicio2);
} 
*/

//--------------------------------------------------------------------------\\


function BorrarServicio() {
    let servicio3 = {
        id_servicio: document.getElementById("id_servicio").value
    };

    alert("Borrado correctamente");
    console.log(servicio3);
    deleteService(servicio3);
    window.location.href = "../servicios.html";
}


//--------------------------------------------------------------------------\\