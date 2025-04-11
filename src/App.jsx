import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Home from './pages/Home';
import Login from './pages/Login';
import Dashboard from './pages/Dashboard';
import PlanesPage from './pages/PlanesPage';
import ConsultasPage from './pages/ConsultasPage';
import AsistenciaPage from './pages/AsistenciaPage';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';

const App = () => {
  return (
    <>
      <Navbar />
      <main>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/planes" element={<PlanesPage />} />
          <Route path="/consultas" element={<ConsultasPage />} />
          <Route path="/asistencia" element={<AsistenciaPage />} />
          <Route path="/login" element={<Login />} />
          <Route path="/dashboard" element={<Dashboard />} />
        </Routes>
      </main>
      <Footer />
    </>
  );
};

export default App;