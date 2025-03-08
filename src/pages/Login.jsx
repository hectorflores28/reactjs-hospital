import { useState } from 'react';
import { useAuth } from '../context/AuthContext';
import LoginForm from '../components/LoginForm';

export default function Login() {
  const { login } = useAuth();
  const [error, setError] = useState('');

  const handleSubmit = async (credentials) => {
    try {
      await login(credentials);
    } catch (error) {
      setError('Credenciales incorrectas');
    }
  };

  return (
    <div className="container">
      {error && (
        <div className="alert alert-danger">
          {error}
          <button onClick={() => setError('')}>&times;</button>
        </div>
      )}
      <LoginForm onSubmit={handleSubmit} />
    </div>
  );
}