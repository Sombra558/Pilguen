import React from 'react';
import MultiSelectCat from '../../ReactComponent/MultiSelectCat';
const ProductoForm =(props) => (
    <div>
    <div className="card">
    <div className="card-header"><h3 className="panel-title">Agregar Producto</h3></div>   
    <div className="card-body">
    <form  onSubmit={props.onAddCourse}> 
    <div className="form-group">
    <input className="form-control" type="text" name="producto" placeholder="Producto" required/>
    </div>
    <div className="form-group">
    <textarea className="form-control" type="text" name="descripcion" placeholder="Descripcion" required/>
    </div>
    <div className="form-group">
    <MultiSelectCat/>
    </div>
    <div className="form-group">
    <input className="form-control" type="text" name="url" placeholder="Url" required/>
    </div>
    <div className="form-group">
    <input className="form-control btn btn-primary" type="submit" value="Guardar"/>
    </div>
    </form>
    </div>
    </div>
    </div>
)
 
export default ProductoForm