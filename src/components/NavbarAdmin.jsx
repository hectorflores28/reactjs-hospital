import React from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';

export default function AdminNavbar() {
  const { user, logout } = useAuth();

  return (
    <Navbar bg="dark" variant="dark" expand="lg" sticky="top">
      <Container>
        <Navbar.Brand as={Link} to="/historial">Oxygen</Navbar.Brand>
        <Navbar.Toggle aria-controls="admin-navbar" />
        <Navbar.Collapse id="admin-navbar">
          <Nav className="ms-auto">
            <NavDropdown title="Historial Médico" id="historial-dropdown">
              <NavDropdown.Item as={Link} to="/vacunas">Vacunas</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="/analisis">Análisis</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="/radiografias">Radiografías</NavDropdown.Item>
              <NavDropdown.Item as={Link} to="/enfermedades">Enfermedades</NavDropdown.Item>
            </NavDropdown>
            <NavDropdown title={user?.nombre || "Usuario"} id="user-dropdown">
              <NavDropdown.Item onClick={logout}>Salir</NavDropdown.Item>
            </NavDropdown>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}