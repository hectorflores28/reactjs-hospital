import React from 'react';
import { Container, Row, Col, Card, Accordion } from 'react-bootstrap';
import Icon from '../components/Icon';

const AsistenciaPage = () => {
  const faqItems = [
    {
      pregunta: "¿Cómo puedo solicitar un financiamiento?",
      respuesta: "Para solicitar un financiamiento, debe completar el formulario en la sección de Planes, seleccionar el plan que mejor se adapte a sus necesidades y uno de nuestros asesores se pondrá en contacto con usted."
    },
    {
      pregunta: "¿Qué documentos necesito para aplicar?",
      respuesta: "Los documentos básicos requeridos son: Identificación oficial, comprobante de domicilio, comprobante de ingresos y historial crediticio."
    },
    {
      pregunta: "¿Cuánto tiempo toma el proceso de aprobación?",
      respuesta: "El proceso de aprobación típicamente toma entre 24 a 48 horas hábiles una vez que toda la documentación ha sido recibida."
    },
    {
      pregunta: "¿Qué tipos de tratamientos cubre el financiamiento?",
      respuesta: "Nuestros planes cubren una amplia gama de tratamientos médicos, desde consultas básicas hasta procedimientos quirúrgicos complejos, dependiendo del plan seleccionado."
    }
  ];

  const contactInfo = {
    telefono: "+52 (555) 123-4567",
    email: "asistencia@medifinance.com",
    horario: "Lunes a Viernes: 9:00 AM - 6:00 PM"
  };

  return (
    <Container className="py-5 mt-4 animate-fade-in">
      <h1 className="text-center mb-5 animate-slide-up">Centro de Asistencia</h1>
      
      {/* Sección de Contacto Directo */}
      <Row className="mb-5">
        <Col md={4}>
          <Card className="text-center h-100 shadow-sm animate-slide-up" style={{animationDelay: '0.2s'}}>
            <Card.Body>
              <Icon 
                name="phone" 
                className="fs-1 mb-3" 
                style={{ color: 'var(--primary-color)' }}
              />
              <h3>Teléfono</h3>
              <p>{contactInfo.telefono}</p>
            </Card.Body>
          </Card>
        </Col>
        <Col md={4}>
          <Card className="text-center h-100 shadow-sm animate-slide-up" style={{animationDelay: '0.3s'}}>
            <Card.Body>
              <Icon 
                name="envelope" 
                className="fs-1 mb-3" 
                style={{ color: 'var(--primary-color)' }}
              />
              <h3>Email</h3>
              <p>{contactInfo.email}</p>
            </Card.Body>
          </Card>
        </Col>
        <Col md={4}>
          <Card className="text-center h-100 shadow-sm animate-slide-up" style={{animationDelay: '0.4s'}}>
            <Card.Body>
              <Icon 
                name="clock" 
                className="fs-1 mb-3" 
                style={{ color: 'var(--primary-color)' }}
              />
              <h3>Horario</h3>
              <p>{contactInfo.horario}</p>
            </Card.Body>
          </Card>
        </Col>
      </Row>

      {/* Sección de Preguntas Frecuentes */}
      <h2 className="text-center mb-4 animate-slide-up" style={{animationDelay: '0.5s'}}>Preguntas Frecuentes</h2>
      <Row className="justify-content-center">
        <Col md={8}>
          <Accordion className="animate-fade-in" style={{animationDelay: '0.6s'}}>
            {faqItems.map((item, index) => (
              <Accordion.Item key={index} eventKey={index.toString()} className="animate-fade-in" style={{animationDelay: `${0.7 + (index * 0.1)}s`}}>
                <Accordion.Header>{item.pregunta}</Accordion.Header>
                <Accordion.Body>{item.respuesta}</Accordion.Body>
              </Accordion.Item>
            ))}
          </Accordion>
        </Col>
      </Row>
    </Container>
  );
};

export default AsistenciaPage; 