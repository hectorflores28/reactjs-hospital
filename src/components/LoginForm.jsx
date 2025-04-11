import React, { useState } from 'react';
import { Form, Button, Card } from 'react-bootstrap';
import { Link } from 'react-router-dom';

const LoginForm = ({ onSubmit, error }) => {
  const [credentials, setCredentials] = useState({
    username: '',
    password: '',
    rememberMe: false
  });

  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    setCredentials(prev => ({
      ...prev,
      [name]: type === 'checkbox' ? checked : value
    }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    onSubmit(credentials);
  };

  return (
    <Card className="border-0 shadow-sm">
      <Card.Header 
        className="text-center border-0 text-white py-4"
        style={{ backgroundColor: 'var(--primary-color)' }}
      >
        <h4 className="mb-0">Acceso a MediFinance</h4>
      </Card.Header>
      <Card.Body className="px-4 py-5">
        {error && (
          <div className="alert alert-danger d-flex align-items-center" role="alert">
            <i className="bi bi-exclamation-circle-fill me-2"></i>
            <div>{error}</div>
          </div>
        )}
        <Form onSubmit={handleSubmit}>
          <Form.Group className="mb-4">
            <Form.Label>Usuario</Form.Label>
            <Form.Control
              type="text"
              name="username"
              placeholder="Ingresa tu usuario"
              value={credentials.username}
              onChange={handleChange}
              required
              className="py-2"
            />
          </Form.Group>

          <Form.Group className="mb-4">
            <Form.Label>Contraseña</Form.Label>
            <Form.Control
              type="password"
              name="password"
              placeholder="Ingresa tu contraseña"
              value={credentials.password}
              onChange={handleChange}
              required
              className="py-2"
            />
          </Form.Group>

          <Form.Group className="mb-4">
            <Form.Check
              type="checkbox"
              name="rememberMe"
              label="Recordar mi sesión"
              checked={credentials.rememberMe}
              onChange={handleChange}
            />
          </Form.Group>

          <Button 
            type="submit"
            className="btn-hospital-primary w-100 py-2"
          >
            Iniciar Sesión
          </Button>
        </Form>
      </Card.Body>
      <Card.Footer className="text-center border-0 bg-light py-4">
        <p className="mb-0">
          ¿No tienes una cuenta? <Link to="/registro" className="text-decoration-none" style={{ color: 'var(--primary-color)' }}>Regístrate aquí</Link>
        </p>
      </Card.Footer>
    </Card>
  );
};

export default LoginForm;