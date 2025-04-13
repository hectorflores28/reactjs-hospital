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
      <div className="row gx-4 gx-lg-5 align-items-start animate-fade-in">
        <div className="col-lg-7">
          <div style={{ maxHeight: '400px', overflow: 'hidden' }} className="animate-slide-up">
            <img 
              className="img-fluid rounded animate-fade-in"
              src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
              alt="Hospital Finance"
              style={{
                objectFit: 'cover',
                width: '100%',
                height: '100%',
                animationDelay: '0.2s'
              }}
            />
          </div>
        </div>
        <div className="col-lg-5">
          <h1 className="font-weight-light animate-slide-up" style={{animationDelay: '0.3s'}}>Apoyo Financiero Hospitalario</h1>
          <p className="lead mb-4 animate-fade-in" style={{animationDelay: '0.4s'}}>Brindamos asistencia para trámites de financiamiento de gastos médicos y hospitalarios.</p>
          <div className="d-flex gap-3 mb-4">
            <button 
              className="btn-hospital-primary animate-fade-in"
              onClick={handleConsultaClick}
              style={{animationDelay: '0.5s'}}
            >
              Generar una Consulta
            </button>
            <button 
              className="btn-hospital-primary animate-fade-in"
              onClick={() => setShowForm(!showForm)}
              style={{animationDelay: '0.6s'}}
            >
              {showForm ? 'Ocultar Formulario' : 'Consulta tu CURP'}
            </button>
          </div>
        </div>
      </div>

      {/* Segunda fila para el formulario */}
      {showForm && (
        <div className="row mt-4 animate-fade-in" style={{animationDelay: '0.7s'}}>
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