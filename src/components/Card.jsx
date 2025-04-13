import React from 'react';

const Card = ({ titulo, contenido, imagen, onButtonClick, className, style }) => {
  return (
    <div className={`col-md-4 mb-4 ${className}`} style={style}>
      <div className="card h-100 shadow animate-fade-in">
        <img 
          src={imagen} 
          className="card-img-top animate-fade-in" 
          alt={titulo}
          style={{ 
            height: '200px', 
            objectFit: 'cover',
            animationDelay: '0.1s'
          }}
        />
        <div className="card-body d-flex flex-column animate-fade-in" style={{animationDelay: '0.2s'}}>
          <div>
            <h5 className="card-title animate-slide-up" style={{animationDelay: '0.3s'}}>{titulo}</h5>
            <p className="card-text animate-fade-in" style={{animationDelay: '0.4s'}}>{contenido}</p>
          </div>
          <div className="mt-auto">
            <button 
              className="btn-hospital-primary btn-info-card w-100 animate-fade-in"
              onClick={onButtonClick}
              style={{animationDelay: '0.5s'}}
            >
              Más Información
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Card;