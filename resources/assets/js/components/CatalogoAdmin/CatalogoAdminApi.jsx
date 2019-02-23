import React, { Component } from 'react';
import { 
	Route,
	BrowserRouter as Router,
	Link,
	Redirect,
	Switch
} from 'react-router-dom';
import axios from 'axios';

export default class GeneralApp extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    categorias: [],
    contadorproductos: 0,     
    contadorcategorias: 0,
    contadortipos: 0,
    }
    
} 
componentDidMount() {
    axios.get(`/ControlAdmin/ProductoContador`)
      .then(
        res => {
        const contadorproductos = res.data;
        this.setState({ contadorproductos });
        }
      ),
      axios.get(`/ControlAdmin/CategoriasContador`)
      .then(
        res => {
        const contadorcategorias = res.data;
        this.setState({ contadorcategorias });
        }
      )
  }        
   
    render() {
        return (
            <Router>
            <div className="row">       
                <div className="col-md-6">
                <div className="card">
                <div className="card-header"><h3 className="card-title">Productos</h3></div>   
                <div className="card-body">
                <h1>{this.state.contadorproductos}</h1></div>
                <div className="card-footer"><Link to="/DetallesProducto">Detalles</Link></div>
                </div>
                </div>
                <div className="col-md-6">
                <div className="card">
                <div className="card-header"><h3 className="panel-title">Categorías</h3></div>   
                <div className="card-body">
                <h1>{this.state.contadorcategorias}</h1></div>
                <div className="card-footer"><Link to="/DetallesCategoria">Detalles</Link></div>
                </div>
                </div>
                <div className="col-md-6">
                <div className="card">
                <div className="card-header"><h3 className="panel-title">Categorías</h3></div>   
                <div className="card-body">
                <h1>{this.state.contadortipos}</h1></div>
                <div className="card-footer"><Link to="/DetallesCategoria">Detalles</Link></div>
                </div>
                </div>      
            <div className="col-md-12">
            <Switch>
          
            </Switch>
            </div>
            </div>
            </Router> 
        );
    }
}