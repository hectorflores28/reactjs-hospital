import { useState } from 'react';
import { Container, Row, Col, Button } from 'react-bootstrap';
import CurpForm from './CurpForm';
import InfoCards from './InfoCards';
import Separator from './Separator';

const Home = () => {
  const [showCurpForm, setShowCurpForm] = useState(false);

  return (
    <Container className="mt-5">
      <Row className="align-items-center my-5">
        <Col lg={7}>
          <img src="/img/curp.jpg" className="img-fluid rounded" alt="CURP" />
        </Col>
        <Col lg={5}>
          <h1 className="font-weight-light">¿Conoces tu CURP?</h1>
          <p>La consulta puede efectuarse proporcionando tu nombre y datos de nacimiento.</p>
          <Button 
            variant="primary" 
            onClick={() => setShowCurpForm(!showCurpForm)}
          >
            Solicitar formulario para CURP
          </Button>
          {showCurpForm && <CurpForm />}
        </Col>
      </Row>
      <Separator />
      <InfoCards />
    </Container>
  );
};

export default Home;