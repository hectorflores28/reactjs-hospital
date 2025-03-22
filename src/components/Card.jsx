import React from 'react';

const Card = ({ titulo, contenido, imagen }) => {
  return (
    <div className="col-md-4 mb-4">
      <div className="card h-100 shadow">
        <img 
          src={imagen} 
          className="card-img-top" 
          alt={titulo}
          style={{ height: '200px', objectFit: 'cover' }}
        />
        <div className="card-body">
          <h5 className="card-title">{titulo}</h5>
          <p className="card-text">{contenido}</p>
          <button className="btn-hospital-primary mt-2" style={{ fontSize: '0.9rem', padding: '0.5rem 1rem' }}>
            Más Información
          </button>
        </div>
      </div>
    </div>
  );
};

export default Card;