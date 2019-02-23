import React, { Component } from 'react';
export default class Carrito extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    idprueba:this.props.id,
    producto_id:this.props.producto_id,
    cantidad:this.props.cantidad,
    medida:this.props.medida,
    }
    this.handleSubmit = this.handleSubmit.bind(this);
}

handleSubmit(ev){
    ev.preventDefault();
    let uri = `http://localhost:8000/Carrito/${this.state.idprueba}`
    axios.delete(uri).then(
      res => {
        const carritos = res.data;
        this.setState({ carritos });
        }
    );
  }
render() {
    return {contadorhijo:this.state.carritocont},(
    
    <tr className="odd gradeX">
    <td>{this.state.idprueba}</td>
    <td>{this.state.producto_id}</td>
    <td>{this.state.cantidad}</td>
	<td>{this.state.medida}</td>
    <td>
    <form onSubmit={this.handleSubmit}>
                <input type="submit" value="X" className="btn btn-danger"/>
                </form>
    </td>
    </tr>
    );
}
}