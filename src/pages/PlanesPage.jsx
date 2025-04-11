import React from 'react';
import { Container, Row, Col, Card } from 'react-bootstrap';
import Icon from '../components/Icon';

const PlanesPage = () => {
  const planes = [
    {
      id: 1,
      titulo: "Plan Básico",
      precio: "$1,000/mes",
      beneficios: [
        "Consultas médicas básicas",
        "Medicamentos genéricos",
        "Análisis clínicos básicos",
        "Atención de emergencias"
      ]
    },
    {
      id: 2,
      titulo: "Plan Familiar",
      precio: "$2,500/mes",
      beneficios: [
        "Todo lo del plan básico",
        "Cobertura para toda la familia",
        "Especialidades médicas",
        "Descuentos en laboratorios"
      ]
    },
    {
      id: 3,
      titulo: "Plan Premium",
      precio: "$4,000/mes",
      beneficios: [
        "Todo lo del plan familiar",
        "Hospitalización incluida",
        "Cirugías programadas",
        "Atención domiciliaria"
      ]
    }
  ];

  return (
    <Container className="py-5">
      <h1 className="text-center mb-5">Planes de Financiamiento</h1>
      <Row>
        {planes.map((plan) => (
          <Col key={plan.id} md={4} className="mb-4">
            <Card className="h-100 shadow-sm">
              <Card.Header className="text-white text-center py-3" style={{ backgroundColor: 'var(--primary-color)' }}>
                <h3>{plan.titulo}</h3>
                <h4>{plan.precio}</h4>
              </Card.Header>
              <Card.Body>
                <ul className="list-unstyled">
                  {plan.beneficios.map((beneficio, index) => (
                    <li key={index} className="mb-2">
                      <Icon name="check" style={{ color: 'var(--primary-color)' }} className="me-2" />
                      {beneficio}
                    </li>
                  ))}
                </ul>
              </Card.Body>
              <Card.Footer className="text-center bg-white">
                <button className="btn-hospital-primary">
                  Seleccionar Plan
                </button>
              </Card.Footer>
            </Card>
          </Col>
        ))}
      </Row>
    </Container>
  );
};

export default PlanesPage; 