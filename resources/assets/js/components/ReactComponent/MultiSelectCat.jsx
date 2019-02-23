import React, { Component } from 'react';
import Select from 'react-select';

  class MultiSelectCat extends Component {
    constructor(...props)  {
        super(...props)
    
        this.state = {
          options: this.props.options,
          values:[],
          selectedOption: [],
        }
    
        this.handleChange = this.handleChange.bind(this)
      }
    componentDidMount(){
        axios.get(`/Catalogo/Categorialistado`)
        .then(
            res =>{
                const values=res.data;
                this.setState({values})
            }
        )
    }
      handleChange (selectedOption) {
        this.setState({ selectedOption });
        console.log(`Option selected:`, selectedOption);
      }
    
      render() {
        const { selectedOption } = this.state;
 
    return (
      <Select
        name="categoria"
        value={selectedOption}
        categoria={this.props.categoria}
        onChange={this.handleChange}
        options={this.state.values.map(values => ({
          label: values.categoria, value: values.categoria 
        }   
        ))}
       
      />
    );
      }
    }
  

  export default MultiSelectCat