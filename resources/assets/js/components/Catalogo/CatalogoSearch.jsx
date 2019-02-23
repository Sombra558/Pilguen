import React from 'react'

const CatalogoSearch = props => (
    <div className="col-md-12">
  <div className="card">
    <div className="card-header"><h3 className="panel-title">Componente Buscador</h3></div>   
    <div className="card-body">
  <form >
    <div className="form-group">
    <input className="form-control" type="search" id="search" name="search" onChange={props.onSearch} placeholder="Producto, Categorías" />
    </div>
  </form>
  </div>
  </div>
  </div>

)

export default CatalogoSearch