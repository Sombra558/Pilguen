import React, { Component } from 'react';
import axios from 'axios';
import CarritoForm from './CarritoForm';
import CreaCarro from '../Carrito/CreaCarro';
import Catalogo from '../Catalogo';
export default class CarritoApi extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    carritos: [],
    mycars: [],
    id: this.props.id,
    }
    this.handleOnAddCarrito=this.handleOnAddCarrito.bind(this)
    this.handleOnAddProcesaCarro=this.handleOnAddProcesaCarro.bind(this)
}
componentDidMount(){
    axios.get(`/Carrito/Lista`)
      .then(
        res => {
        const carritos = res.data;
        this.setState({ carritos });
        }
      ),
      axios.get(`/TomarCarrito`)
      .then(
        res => {
        const mycars = res.data;
        this.setState({ mycars });
        }
      )
  }
handleOnAddCarrito(on){
    on.preventDefault()
    let form = on.target,
     carrito = {
         cantidad: form.cantidad.value,
         medida: form.medida.value,
         producto_id: form.producto_id.value,
         carrito_id: form.carrito_id.value,
     }
     axios.post(`/AgregarProducto`, {
        cantidad: carrito.cantidad,
        medida: carrito.medida,
        producto_id: carrito.producto_id,
        carrito_id: carrito.carrito_id,
      })
    .then(res => {
        console.log(res);
        console.log(res.data);
    })
     this.setState({
        carritos: this.state.carritos.concat([carrito])
        })
     form.reset()
    }
    handleOnAddProcesaCarro(en){
        en.preventDefault()
        let form = en.target,
         mycar = {
             user_id: form.user_id.value,  
         }
         axios.post(`/ProcesarCarrito`, {
            user_id: mycar.user_id,
          })
        .then(uni => {
            console.log(uni);
            console.log(uni.data);
        })
        this.setState({
            mycars: this.state.mycars.concat([mycar])
            });
        }

    render() {
        if (!this.state.mycars.length){
            return(
                    <CreaCarro AddCarro={this.handleOnAddProcesaCarro}></CreaCarro>
            )
            
        } else{
            return (
                <div>
                    <CarritoForm identificador={this.props.id} onAddCarrito={this.handleOnAddCarrito}/>
                </div>  
            );
        }        
   }
}
