import React from 'react';

// Footer Componente
const Footer = () => {
    return (
        <footer className="bg-dark text-white py-4 mt-5">
            <div className="container">
                <p>&copy; {new Date().getFullYear()} Hospital. Todos los derechos
reservados.</p>
            </div>
        </footer>
    );
};