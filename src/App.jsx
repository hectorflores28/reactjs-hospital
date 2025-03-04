import React from 'react';
import ReactDOM from 'react-dom';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Hero from './components/Hero';
import TarjetasExtras from './components/TarjetasExtras';

function App() {
    return (
        <div className="container">
            <Navbar />
            <Hero />
            <TarjetasExtras />
            <Footer />
        </div>
    );
}

// Renderizar la aplicación
ReactDOM.render(<App />, document.getElementById('root'));