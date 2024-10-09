const $negocio = (function () {



    const inventario = {};


    function agregarProducto(nombre, cantidad, precio, categoria) {

        if (inventario[nombre]) {

            alert("El producto ya existe");

        } else {
            inventario[nombre] = { cantidad, precio, categoria };

            alert(`Se ha añadido correctamente el producto: ${nombre}`);

        }
    }

    function eliminarProducto(nombre) {

        if (inventario[nombre]) {

            const confirmacion = confirm("¿Estas seguro de que quieres eliminar el producto?")
            if (confirmacion) {
                delete inventario[nombre];
                alert("Producto eliminado");
            }

        }
        alert("Producto no encontrado")

    }

    function buscarProducto(){
        
    }



});











