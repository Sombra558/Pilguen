import React from 'react';
import Carrito from './Carrito';
const CarritoList = (props) => (
    <div className="row">
    <button type="button" className="btn btn-primary">
    <span className="carrito"><i className="fas fa-cart-plus"> </i></span> <span className="badge badge-light">{props.carritocont}</span>
    </button>
    <table width="100%" className="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Producto</th>
                                       	<th>Cantidad</th>
                                        <th>Medida</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                   {
                                   props.carritos.map(carritos => (
                                    <Carrito
                                    key={carritos.id}
                                    id={carritos.id}
                                    producto_id={carritos.producto_id}
                                    cantidad={carritos.cantidad}
                                    medida={carritos.medida}
                                    />
                                ))
                                    }
						           
        							
                                </tbody>
    </table>
         
    </div>                 
)
export default CarritoList