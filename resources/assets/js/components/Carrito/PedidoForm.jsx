import React from 'react';
const PedidoForm =(props) => (
    <div>
 
    <form onSubmit={props.AddPedido}>
    <div className="form-group">
    <input type="hidden" name="user_id" value={props.user_id}/>
    </div> 
    <div className="form-group">
    <input className="form-control btn btn-primary" type="submit" value="Procesar Pedido"/>
    </div>
    </form>
    </div>
)
 
export default PedidoForm