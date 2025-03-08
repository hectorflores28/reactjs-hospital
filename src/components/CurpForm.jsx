import React from 'react';

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
    // Lógica para enviar el formulario
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
      <div className="form-group">
        <label>Nombre(s):</label>
        <input
          type="text"
          name="nombre"
          className="form-control"
          placeholder="Ingresa tu nombre(s)"
          value={formData.nombre}
          onChange={handleChange}
          required
        />
      </div>

      <div className="form-group">
        <label>Primer apellido:</label>
        <input
          type="text"
          name="primerApellido"
          className="form-control"
          placeholder="Ingresa tu primer apellido"
          value={formData.primerApellido}
          onChange={handleChange}
          required
        />
      </div>

      {/* Repite para los demás campos */}

      <button type="submit" className="btn-hospital-primary">
        Generar CURP
      </button>
    </form>
  );
};

export default CurpForm; // Exportación default crucial