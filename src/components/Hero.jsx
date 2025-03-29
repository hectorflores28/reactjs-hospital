import React from 'react';
import CurpForm from './CurpForm.jsx';

const Hero = () => {
  const [showForm, setShowForm] = React.useState(false);

  return (
    <div className="row gx-4 gx-lg-5 align-items-center my-5">
      <div className="col-lg-7">
        <img className="img-fluid rounded mb-4 mb-lg-0" src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hospital Finance" />
      </div>
      <div className="col-lg-5">
        <h1 className="font-weight-light">Apoyo Financiero Hospitalario</h1>
        <p className="lead mb-4">Brindamos asistencia para trámites de financiamiento de gastos médicos y hospitalarios.</p>
        <button 
          className="btn-hospital-primary"
          onClick={() => setShowForm(!showForm)}
        >
          {showForm ? 'Ocultar Formulario' : 'Consultar Asistencia'}
        </button>
        {showForm && <CurpForm />}
      </div>
    </div>
  );
};

export default Hero;