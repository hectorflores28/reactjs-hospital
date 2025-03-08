import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <nav className="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div className="container px-5">
        <Link className="navbar-brand" to="/">Oxygen</Link>
        <div className="collapse navbar-collapse" id="navbarSupportedContent">
          <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
            <li className="nav-item"><Link className="nav-link" to="/">Inicio</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/citas">Citas</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/medicos">Médicos</Link></li>
            <li className="nav-item"><Link className="nav-link" to="/login">Ingresar</Link></li>
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;