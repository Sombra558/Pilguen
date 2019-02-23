import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { 
	Route,
	BrowserRouter as Router,
	Link,
	Redirect,
	Switch
} from 'react-router-dom';
import CatalogoAdminApi from './CatalogoAdmin/CatalogoAdminApi';
import CategoriaAdminApp from './CatalogoAdmin/Categoria/CategoriaAdminApp';
import ProductoAdminApp from './CatalogoAdmin/Producto/ProductoAdminApp';
export default class Admin extends Component {
    render() {
        return (
            <Router>
            <div className="container-fluid">
                <div className="row">
                
                    <div className="col-md-2">
                        
                        <ul className="nav flex-column">
                            <li><h4>Menu</h4></li>
                            <li class="nav-item">
                                <Link className="nav-link active" to="/ControlAdmin">Control General</Link>
                            </li>
                            <li class="nav-item">
                                <Link className="nav-link" to="/ControlAdmin/AgregarProducto">Agregar Producto</Link>
                            </li>
                            <li  class="nav-item">
                                <Link className="nav-link" to="/ControlAdmin/AgregarCategoria">Agregar Categoria</Link>
                            </li>
                        </ul>
                    </div>
                 <div className="col-md-10">
                    <div className="col-md-10 col-md-offset-1">
                    <div className="card">
                <div className="card-header">Sistema de Administracion de Contenido Pilguen </div>
                <div className="card-body">
                <div>
                <Switch>
                <Route path='/ControlAdmin' exact component={CatalogoAdminApi} />   
                <Route path='/ControlAdmin/AgregarProducto' exact component={ProductoAdminApp} />              
                <Route path='/ControlAdmin/AgregarCategoria' exact component={CategoriaAdminApp} /> 
              </Switch>
                 </div>
                 </div>
                 </div>
        </div>
        </div>
        </div>
        </div>
        </Router>      
        );
    }
}

if (document.getElementById('general')) {
    ReactDOM.render(<Admin />, document.getElementById('general'));
}
