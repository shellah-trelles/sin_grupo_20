let listaCarrito=[]

//let listaCarrito =[]

 const CrearOtrosItem=(imagen, titulo, precio, cantidad)=>{

 	let item={
 		'imagen':imagen,
		'titulo':titulo,
		'precio':precio,
		'cantidad':cantidad
 	};

 	 listaCarrito.push(item);
 	//return item
 	// console.log(item)
 	//return arrayOtros.push(item);
 }

 const GuardarDBOtrosItem =()=>{
	localStorage.setItem('listaProductos', JSON.stringify(listaCarrito))	
}
$(".anadircarrito").on("click", function(e){
	e.preventDefault()
	let imagen =$(this).attr("data-imagen")
	let nombre =$(this).attr("data-nombre")
	let precio =$(this).attr("data-precio")
	
	console.log(id+" "+nombre+" "+precio)

	if (JSON.parse(localStorage.getItem('listaProductos'))!=null) {
		//console.log(JSON.parse(localStorage.getItem('listaProductos')))
		var listaProductos = JSON.parse(localStorage.getItem('listaProductos'));
		console.log(listaProductos)
		for (var i = 0; i< listaProductos.length; i++) {
			if (listaProductos[i]['idProducto']==id) {
				alert("producto ya esta agregado")	
				return;
			}
		}
	 	listaCarrito =JSON.parse(localStorage.getItem('listaProductos'))
	}
	if (JSON.parse(localStorage.getItem('listaProductos'))==null) {
		listaCarrito=[]
	}
	CrearOtrosItem(id, nombre, precio, '1');
	GuardarDBOtrosItem();

	alert("producto agregado")

})

//pintando carrito

if (localStorage.getItem('listaProductos')!=null) {
	 let listasCarrito = JSON.parse(localStorage.getItem('listaProductos'))

	 listasCarrito.forEach(functionForEach )

	 function functionForEach(item, index){
	 	console.log('item'+ item)
	 	$('.cuerpoCarrito').append("<tr>"
								+"<td>"+item.idProducto+"</td>"
								+"<td>"+item.titulo+"</td>"
								+"<td>"+item.cantidad+"</td>"
								+"<td>"+item.precio+"</td>"
								+"<td>eli</td>"
							+"</tr>");


	 }
}else{
	$('.cuerpoCarrito').html('<div> Aun no hay productos en el carrito de compras</div>');
}