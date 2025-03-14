import React from 'react';
import FormGroup from './FormGroup';

const CurpForm = () => {
  const [formData, setFormData] = React.useState({
    nombre: '',
    primerApellido: '',
    segundoApellido: '',
    diaNacimiento: '',
    mesNacimiento: '',
    añoNacimiento: '',
    sexo: '',
    estado: ''
  });

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Datos del formulario:', formData);
  };

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  return (
    <form onSubmit={handleSubmit} className="mt-3">
      <FormGroup label="Nombre(s)" type="text" name="nombre" placeholder="Ingresa tu nombre(s)" value={formData.nombre} onChange={handleChange} />
      <FormGroup label="Primer apellido" type="text" name="primerApellido" placeholder="Ingresa tu primer apellido" value={formData.primerApellido} onChange={handleChange} />
      <FormGroup label="Segundo apellido" type="text" name="segundoApellido" placeholder="Ingresa tu segundo apellido" value={formData.segundoApellido} onChange={handleChange} />
      <FormGroup label="Día de nacimiento" type="number" name="diaNacimiento" placeholder="Día" value={formData.diaNacimiento} onChange={handleChange} />
      <FormGroup label="Mes de nacimiento" type="number" name="mesNacimiento" placeholder="Mes" value={formData.mesNacimiento} onChange={handleChange} />
      <FormGroup label="Año de nacimiento" type="number" name="añoNacimiento" placeholder="Año" value={formData.añoNacimiento} onChange={handleChange} />
      <FormGroup label="Sexo" type="text" name="sexo" placeholder="M/F" value={formData.sexo} onChange={handleChange} />
      <FormGroup label="Estado" type="text" name="estado" placeholder="Estado de nacimiento" value={formData.estado} onChange={handleChange} />

      <button type="submit" className="btn-hospital-primary">
        Generar CURP
      </button>
    </form>
  );
};

export default CurpForm;