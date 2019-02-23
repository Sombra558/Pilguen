import React, { Component } from 'react';
import axios from 'axios';
import CarritoList from './CarritoList';
import PedidoForm from './PedidoForm';
export default class CarritoApiList extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    carritos: [],
    carritocont:0,
    }
    this.handleOnAddPedido=this.handleOnAddPedido.bind(this)
}
componentDidMount(){
    axios.get(`/Carrito/Lista`)
      .then(
        res => {
        const carritos = res.data;
        this.setState({ carritos });
        }
      ),
      axios.get(`/Carrito/Contador`)
      .then(
        res => {
        const carritocont = res.data;
        this.setState({ carritocont });
        }
      )
  }
  handleOnAddPedido(on){
    on.preventDefault()
    let form = on.target,
     pedido = {
         user_id: form.user_id.value,  
     }
     axios.post(`/ProcesarPedido`, {
        user_id: pedido.user_id,
      })
    .then(res => {
        console.log(res);
        console.log(res.data);
    })
     form.reset()
    }
  
    render() {
        return (
            <div>
                    <CarritoList carritos={this.state.carritos} carritocont={this.state.carritocont} />
                    <PedidoForm carritos={this.state.carritos} AddPedido={this.handleOnAddPedido}/>
            </div>  
        );
    }
}