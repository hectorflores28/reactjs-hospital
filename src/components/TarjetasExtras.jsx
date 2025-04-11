import React from 'react';
import { useNavigate } from 'react-router-dom';
import Card from './Card';

const TarjetasExtras = () => {
  const navigate = useNavigate();

  const cards = [
    { 
      titulo: 'Opciones de Pago', 
      contenido: 'Conozca los diferentes planes de financiamiento y opciones de pago para tratamientos médicos.',
      imagen: 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
      route: '/planes'
    },
    { 
      titulo: 'Asistencia Financiera', 
      contenido: 'Programas de apoyo económico para pacientes con dificultades financieras.',
      imagen: 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
      route: '/asistencia'
    },
    { 
      titulo: 'Seguro Médico', 
      contenido: 'Información sobre cobertura de seguros y proceso de reclamaciones.',
      imagen: 'https://images.unsplash.com/photo-1563453392212-326f5e854473?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
      route: '/consultas'
    }
  ];

  return (
    <div className="row mt-5">
      <h2 className="text-center mb-4">Servicios Financieros</h2>
      <div className="row">
        {cards.map((card, index) => (
          <Card 
            key={index} 
            titulo={card.titulo}
            contenido={card.contenido}
            imagen={card.imagen}
            onButtonClick={() => navigate(card.route)}
          />
        ))}
      </div>
    </div>
  );
};

export default TarjetasExtras;