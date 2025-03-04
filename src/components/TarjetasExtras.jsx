import React from 'react';

// Tarjetas Extras Componente
const TarjetasExtras = () => {
    const cards = [
        {
            titulo: 'Covid-19',
            contenido: 'Información sobre el Covid-19 y sus protocolos en el hospital.'
        },
        {
            titulo: 'Emergencias',
            contenido: 'Datos de emergencia y contactos urgentes.'
        },
        {
            titulo: 'Donaciones',
            contenido: 'Información sobre cómo hacer donaciones al hospital.'
        }
    ];

    return (
        <div className="row mt-5">
            {cards.map((card, index) => (
                <Card key={index} {...card} />
            ))}
        </div>
    );
};