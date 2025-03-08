import React from 'react';
import Card from './Card';

const TarjetasExtras = () => {
  const cards = [
    { titulo: 'Covid-19', contenido: 'Protocolos y medidas de seguridad' },
    { titulo: 'Emergencias', contenido: 'Contactos y servicios urgentes' },
    { titulo: 'Donaciones', contenido: 'Cómo apoyar al hospital' }
  ];

  return (
    <div className="row mt-5">
      {cards.map((card, index) => (
        <Card key={index} {...card} />
      ))}
    </div>
  );
};

export default TarjetasExtras;