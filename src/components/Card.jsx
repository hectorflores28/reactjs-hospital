import React from 'react';

const Card = ({ titulo, contenido, imagen, onButtonClick }) => {
  return (
    <div className="col-md-4 mb-4">
      <div className="card h-100 shadow">
        <img 
          src={imagen} 
          className="card-img-top" 
          alt={titulo}
          style={{ height: '200px', objectFit: 'cover' }}
        />
        <div className="card-body d-flex flex-column">
          <div>
            <h5 className="card-title">{titulo}</h5>
            <p className="card-text">{contenido}</p>
          </div>
          <div className="mt-auto">
            <button 
              className="btn-hospital-primary btn-info-card w-100"
              onClick={onButtonClick}
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