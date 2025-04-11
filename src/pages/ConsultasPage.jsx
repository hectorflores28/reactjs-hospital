import React, { useState } from 'react';
import { Container, Row, Col, Form, Button, Card } from 'react-bootstrap';

const ConsultasPage = () => {
  const [formData, setFormData] = useState({
    nombre: '',
    email: '',
    telefono: '',
    tipo_consulta: '',
    mensaje: ''
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // Aquí iría la lógica para enviar el formulario
    console.log('Datos del formulario:', formData);
  };

  return (
    <Container className="py-5 mt-4">
      <Row className="justify-content-center">
        <Col md={8}>
          <h1 className="text-center mb-4">Consultas Médicas</h1>
          <Card className="shadow-sm">
            <Card.Body className="p-4">
              <Form onSubmit={handleSubmit}>
                <Form.Group className="mb-3">
                  <Form.Label>Nombre completo</Form.Label>
                  <Form.Control
                    type="text"
                    name="nombre"
                    value={formData.nombre}
                    onChange={handleChange}
                    required
                  />
                </Form.Group>

                <Form.Group className="mb-3">
                  <Form.Label>Email</Form.Label>
                  <Form.Control
                    type="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    required
                  />
                </Form.Group>

                <Form.Group className="mb-3">
                  <Form.Label>Teléfono</Form.Label>
                  <Form.Control
                    type="tel"
                    name="telefono"
                    value={formData.telefono}
                    onChange={handleChange}
                    required
                  />
                </Form.Group>

                <Form.Group className="mb-3">
                  <Form.Label>Tipo de Consulta</Form.Label>
                  <Form.Select
                    name="tipo_consulta"
                    value={formData.tipo_consulta}
                    onChange={handleChange}
                    required
                  >
                    <option value="">Seleccione una opción</option>
                    <option value="general">Medicina General</option>
                    <option value="especialidad">Especialidad</option>
                    <option value="urgencias">Urgencias</option>
                    <option value="seguimiento">Seguimiento</option>
                  </Form.Select>
                </Form.Group>

                <Form.Group className="mb-3">
                  <Form.Label>Mensaje</Form.Label>
                  <Form.Control
                    as="textarea"
                    rows={4}
                    name="mensaje"
                    value={formData.mensaje}
                    onChange={handleChange}
                    required
                  />
                </Form.Group>

                <div className="text-center">
                  <Button 
                    type="submit" 
                    className="btn-hospital-primary"
                  >
                    Enviar Consulta
                  </Button>
                </div>
              </Form>
            </Card.Body>
          </Card>
        </Col>
      </Row>
    </Container>
  );
};

export default ConsultasPage; 