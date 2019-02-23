import React, { Component } from 'react';
import axios from 'axios'
import ProductoForm from '../Producto/ProductoForm'
export default class ProductoAdminApp extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    productos: [],
    }
    this.handleOnAddCourse=this.handleOnAddCourse.bind(this)
}

    handleOnAddCourse(on){
        on.preventDefault()
        let form = on.target,
         producto = {
             producto: form.producto.value,
             descripcion: form.descripcion.value,
             categoria: form.categoria.value,
             url: form.url.value,
            
         }
         axios.post(`/ControlAdmin/CrearProducto`, {
            producto: producto.producto,
            descripcion: producto.descripcion,
            categoria: producto.categoria,
            url: producto.url,
          })
        .then(res => {
            console.log(res);
            console.log(res.data);
        })
         this.setState({
            productos: this.state.productos.concat([producto])
            })
         form.reset()
        }
    render() {
        return (
            <div>
                <ProductoForm onAddCourse={this.handleOnAddCourse}/>
            </div>  
        );
    }
}
