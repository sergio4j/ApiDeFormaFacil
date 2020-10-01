
document.querySelector('#obtener').addEventListener('click',function(){

obtenerDatos();
});

function obtenerDatos(){

let url = `https://jsonplaceholder.typicode.com/users`;

const recoge = new XMLHttpRequest();
recoge.open('GET', url, true);
recoge.send();
recoge.onreadystatechange = function(){
    if(this.status == 200 && this.readyState == 4){

        let datos = JSON.parse(this.responseText);
        console.log(datos);

        let resultado = document.querySelector('#resultado');
        resultado.innerHTML = '';
       
        for(let item of datos){
            resultado.innerHTML += `
            <tr>
            <th scope ="row"> ${item.id}</th>
            <td>${item.username} </td>
            <td>${item.email} </td>
            <td>${item.website} </td>
            </tr>
            `
        }
        
    }
  }
}
