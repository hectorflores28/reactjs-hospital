import React from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import TarjetasExtras from './components/TarjetasExtras';
import Footer from './components/Footer';
import './App.css';

const App = () => {
  return (
    <div className="container">
      <Navbar />
      <Hero />
      <TarjetasExtras />
      <Footer />
    </div>
  );
};

export default App;