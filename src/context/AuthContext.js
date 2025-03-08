import { createContext, useContext, useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import api from '../services/api';

export const AuthContext = createContext();

export function AuthProvider({ children }) {
  const [user, setUser] = useState(null);
  const navigate = useNavigate();

  useEffect(() => {
    const storedUser = localStorage.getItem('user');
    if (storedUser) setUser(JSON.parse(storedUser));
  }, []);

  const login = async (credentials) => {
    try {
      const { data } = await api.post('/login', credentials);
      setUser(data);
      localStorage.setItem('user', JSON.stringify(data));
      navigate('/historial');
    } catch (error) {
      console.error('Login error:', error);
    }
  };

  const logout = () => {
    setUser(null);
    localStorage.removeItem('user');
    navigate('/login');
  };

  return (
    <AuthContext.Provider value={{ user, login, logout }}>
      {children}
    </AuthContext.Provider>
  );
}

export function RequireAuth({ children }) {
  const { user } = useAuth();
  const navigate = useNavigate();

  if (!user) {
    navigate('/login');
    return null;
  }

  return children;
}

export const useAuth = () => useContext(AuthContext);