import React from 'react';
import CurpForm from './CurpForm.jsx';

const Hero = () => {
  const [showForm, setShowForm] = React.useState(false);

  return (
    <div className="row gx-4 gx-lg-5 align-items-center my-5">
      <div className="col-lg-7">
        <img className="img-fluid rounded mb-4 mb-lg-0" src="img/curp.jpg" alt="CURP" />
      </div>
      <div className="col-lg-5">
        <h1 className="font-weight-light">¿Conoces tu CURP?</h1>
        <p>La consulta puede realizarse a través del formulario.</p>
        <button 
          className="btn-hospital-primary"
          onClick={() => setShowForm(!showForm)}
        >
          {showForm ? 'Ocultar Formulario' : 'Mostrar Formulario'}
        </button>
        {showForm && <CurpForm />}
      </div>
    </div>
  );
};

export default Hero;