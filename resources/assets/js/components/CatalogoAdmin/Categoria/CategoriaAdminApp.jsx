import React, { Component } from 'react';
import axios from 'axios'
import CategoriaForm from './CategoriaForm'
export default class CategoriaApp extends Component {
    constructor(...props) {
        super(...props)
    this.state ={
    categorias: [],
    }
    this.handleOnAddCategoria=this.handleOnAddCategoria.bind(this)
    
}  
            handleOnAddCategoria(ivn){
                ivn.preventDefault()
                let form = ivn.target,
                 categoria = {
                     categoria: form.categoria.value,
                 }
                 axios.post(`/ControlAdmin/CrearCategoria`, {
                    categoria: categoria.categoria,
                  })
                .then(res => {
                    console.log(res);
                    console.log(res.data);
                })
                 this.setState({
                        categorias: this.state.categorias.concat([categoria])
                    })
                 form.reset()
                }
              
       
    render() {
        return (
            <div>
                 <CategoriaForm onAddCategoria={this.handleOnAddCategoria}/>
            </div>  
        );
    }
}