import React from 'react';
const CarritoForm =(props) => (
    <div>
 
    <form onSubmit={props.onAddCarrito}>
    <div className="form-group">
    <input className="form-control" type="number" name="cantidad" placeholder="cantidad" required/>
    </div>
    <div className="form-group">
    <input className="form-control" type="number" name="medida" placeholder="medida" required/>
    </div>
    <div className="form-group">
    <input type="hidden" name="producto_id" value={props.identificador}/>
    </div>
    <div className="form-group">
    <input type="hidden" name="carrito_id" value="1"/>
    </div>  
    <div className="form-group">
    <input className="form-control btn btn-primary" type="submit" value="Guardar"/>
    </div>
    </form>
    </div>
)
 
export default CarritoForm