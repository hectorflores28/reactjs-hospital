import React from 'react';
import { useNavigate } from 'react-router-dom';
import CurpForm from './CurpForm.jsx';

const Hero = () => {
  const [showForm, setShowForm] = React.useState(false);
  const navigate = useNavigate();

  const handleConsultaClick = () => {
    navigate('/consultas');
  };

  return (
    <>
      {/* Primera fila con imagen y contenido principal */}
      <div className="row gx-4 gx-lg-5 align-items-start">
        <div className="col-lg-7">
          <div style={{ maxHeight: '400px', overflow: 'hidden' }}>
            <img 
              className="img-fluid rounded" 
              src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
              alt="Hospital Finance"
              style={{
                objectFit: 'cover',
                width: '100%',
                height: '100%'
              }}
            />
          </div>
        </div>
        <div className="col-lg-5">
          <h1 className="font-weight-light">Apoyo Financiero Hospitalario</h1>
          <p className="lead mb-4">Brindamos asistencia para trámites de financiamiento de gastos médicos y hospitalarios.</p>
          <div className="d-flex gap-3 mb-4">
            <button 
              className="btn-hospital-primary"
              onClick={handleConsultaClick}
            >
              Generar una Consulta
            </button>
            <button 
              className="btn-hospital-primary"
              onClick={() => setShowForm(!showForm)}
            >
              {showForm ? 'Ocultar Formulario' : 'Consulta tu CURP'}
            </button>
          </div>
        </div>
      </div>

      {/* Segunda fila para el formulario */}
      {showForm && (
        <div className="row mt-4">
          <div className="col-12">
            <div className="card shadow-sm">
              <div className="card-body">
                <CurpForm />
              </div>
            </div>
          </div>
        </div>
      )}
    </>
  );
};

export default Hero;