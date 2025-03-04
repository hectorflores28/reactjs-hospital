import React from "react";

// Card Componente
const Card = ({ titulo, contenido }) => {
    return (
        <div className="col-md-4 mb-4">
            <div className="card shadow-sm">
                <div className="card-body">
                    <h5 className="card-title">{titulo}</h5>
                    <p className="card-text">{contenido}</p>
                </div>
            </div>
        </div>
    );
};