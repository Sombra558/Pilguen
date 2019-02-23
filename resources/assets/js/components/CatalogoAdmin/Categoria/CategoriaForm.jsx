import React from 'react'

const CategoriaFrom =(props) => (
    <div className="card">
    <div className="card-header"><h3 className="panel-title">Agregar Categoria</h3></div>   
    <div className="card-body">
    <form  onSubmit={props.onAddCategoria}>
        <div className="form-group"><input className="form-control" type="text" name="categoria" placeholder="categoria" required/></div>
        <div className="form-group"><input className="form-control btn btn-primary" type="submit" value="Guardar"/></div>
    </form>
    </div>
    </div>   
)
 
export default CategoriaFrom