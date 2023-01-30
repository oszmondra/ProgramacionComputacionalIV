//motrar ocultar div
const hidebtn = document.querySelector('#hideElements')
const listDiv = document.querySelector('#list')

//constante para agregar elementos
const addItemInput = document.querySelector('#AddItem')
const addItemButton = document.querySelector('button#addItemButton')

//constante para eliminar elementos
const removeItem = document.querySelector('#removeItemButton')

//funcion para confirmar eliminar un item
function alerta(){
    var mensaje;
    var opcion = confirm ("Seguro que quieres eliminar este elemento permanente mente")
    if (opcion == true){
      items[index].parentNode.removeChild(items[index])}  
}

//agregar los eventos al boton ocultar/mostrar
hidebtn.addEventListener('click', () => {
    if(listDiv.style.display == 'none'){
        listDiv.style.display = 'block'
        hidebtn.textContent = 'Ocultar'
    } else {
        listDiv.style.display = 'none'
        hidebtn.textContent = 'Mostrar'
    }
})

//agregar elementos a la lista
addItemButton.addEventListener('click', () => {
    if(addItemInput.value === '' ){
        window.alert("NO puede quedar vacio el espacio")

    }else{
        let list = document.querySelector('ul')
        let li = document.createElement('li')
        li.textContent = addItemInput.value
        list.appendChild(li)
        window.alert("agregado correctamente")}
        document.getElementById("AddItem").value = ""
        addItemInput.focus();
})

//funcion para obtener el indice del elemento el la lista
var list = document.getElementById('listItems'),
    items = list.getElementsByTagName('li')

const findIndex = (element) => {
    var len = items.length
    for(var i=0; i<len; i++){
        if(items[i]===element){
            return i
        }
    }
}

list.onclick = (e) =>{
    let event = e || window.event
    src=event.target

    let myIndex = findIndex(src)
    index = myIndex
    list.querySelectorAll('li').forEach(el=>el.classList.
        remove('alert','alert-danger'))
    items[myIndex].classList.add('alert','alert-danger')
    document.getElementById("AddItem").value = ""
}

removeItem.addEventListener('click', () =>{
    //items[index].parentNode.removeChild(items[index])
    alerta()
})


