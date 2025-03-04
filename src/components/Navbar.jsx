import { Link, NavLink } from 'react-router-dom';
import { Navbar, Nav, Container, NavDropdown } from 'react-bootstrap';

const CustomNavbar = ({ isAdmin }) => {
  return (
    <Navbar bg="dark" variant="dark" expand="lg" sticky="top">
      <Container>
        <Navbar.Brand as={Link} to="/">Oxygen</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="ms-auto">
            <Nav.Link as={NavLink} to="/">Inicio</Nav.Link>
            <Nav.Link as={NavLink} to="/citas">Citas</Nav.Link>
            <Nav.Link as={NavLink} to="/medicos">Médicos</Nav.Link>
            {isAdmin ? (
              <AdminNavItems />
            ) : (
              <Nav.Link as={NavLink} to="/login">Ingresar Sesión</Nav.Link>
            )}
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
};

const AdminNavItems = () => (
  <NavDropdown title="Historial Médico" id="basic-nav-dropdown">
    <NavDropdown.Item as={Link} to="/vacunas">Vacunas</NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/analisis">Análisis</NavDropdown.Item>
    <NavDropdown.Item as={Link} to="/radiografias">Radiografías</NavDropdown.Item>
    <NavDropdown.Divider />
    <NavDropdown.Item as={Link} to="/logout">Salir</NavDropdown.Item>
  </NavDropdown>
);

export default CustomNavbar;