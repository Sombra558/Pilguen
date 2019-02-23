import React from 'react';
import CarritoApi from '../Carrito/CarritoApi';
const Producto =(props) => (
  
    <li className="list-group-item col-md-4 " >
    <div className="card">
    <img height="150px" src={props.url} className="card-img-top" />
    <div className="card-header"><h3 className="card-title">{props.producto}</h3></div>   
    <div className="card-body">
    {<h5>{props.categoria}</h5>}
        <CarritoApi id={props.id} />
    </div>
    </div>
    </li>

)
export default Producto