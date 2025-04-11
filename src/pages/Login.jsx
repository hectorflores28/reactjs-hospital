import { useState } from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import { useAuth } from '../context/AuthContext';
import LoginForm from '../components/LoginForm';

const Login = () => {
  const { login } = useAuth();
  const [error, setError] = useState('');

  const handleSubmit = async (credentials) => {
    try {
      await login(credentials);
    } catch (error) {
      setError('Usuario o contraseña incorrectos');
    }
  };

  return (
    <Container className="py-5">
      <Row className="justify-content-center">
        <Col md={8} lg={6} xl={5}>
          <div className="text-center mb-4">
            <img 
              src="https://img.icons8.com/color/48/000000/hospital-2.png" 
              alt="Logo" 
              height="50" 
              className="mb-3"
            />
            <h2 className="mb-4" style={{ color: 'var(--primary-color)' }}>
              Bienvenido a MediFinance
            </h2>
          </div>
          <LoginForm onSubmit={handleSubmit} error={error} />
        </Col>
      </Row>
    </Container>
  );
};

export default Login;