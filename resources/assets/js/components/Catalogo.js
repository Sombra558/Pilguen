import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { 
	Route,
	BrowserRouter as Router,
	Link,
	Switch
} from 'react-router-dom';
import CatalogoApi from './Catalogo/CatalogoApi';
import CarritoApiList from './Carrito/CarritoApiList';

export default class Catalogo extends Component {
    render() {
        return (
            <Router>
                <div className="row">
                
                    <div className="col-md-3">
                        
                        <ul className="nav flex-column text-center border">
                            <li><h4>Menu</h4></li>
                            <li className="nav-item">
                                <Link className="nav-link active" to="/Catalogo">Todos los Productos</Link>
                            </li>
                            <li className="nav-item">
                                <Link className="nav-link " to="/Carrito">
                                <span className="carrito"><i className="fas fa-cart-plus"> </i></span>Carrito de Pedidos
                                </Link>
                            </li>
                        </ul>
                    </div>
                 <div className="col-md-9">
                    
                    <div className="card">
                <div className="card-header">Bienvenidos a Pilguen </div>
                <div className="card-body">
                <div>
                <Switch>
                <Route path='/Catalogo' exact component={CatalogoApi} />   
                <Route path='/Carrito' exact component={CarritoApiList} /> 
              </Switch>
                 </div>
                 </div>
                 </div>
        </div>
        </div>
        </Router>     
        );
    }
}

if (document.getElementById('catalogo')) {
    ReactDOM.render(<Catalogo />, document.getElementById('catalogo'));
}
