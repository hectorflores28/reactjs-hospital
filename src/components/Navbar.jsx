import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark sticky-top">
      <div className="container px-5">
        <Link className="navbar-brand" to="/">
          <img src="https://img.icons8.com/color/48/000000/hospital-2.png" alt="Logo" height="30" className="d-inline-block align-text-top me-2" />
          MediFinance
        </Link>
        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarSupportedContent">
          <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
            <li className="nav-item"><Link className="nav-link" to="/">Inicio</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/planes">Planes de Pago</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/consultas">Consultas</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/asistencia">Asistencia</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/login">Acceso</Link></li>
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;