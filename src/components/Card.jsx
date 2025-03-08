import React from 'react';

const Card = ({ titulo, contenido }) => {
  return (
    <div className="col-md-4 mb-4">
      <div className="card h-100 shadow">
        <div className="card-body">
          <h5 className="card-title">{titulo}</h5>
          <p className="card-text">{contenido}</p>
        </div>
      </div>
    </div>
  );
};

export default Card;