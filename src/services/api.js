import axios from 'axios';

const api = axios.create({
  baseURL: process.env.REACT_APP_API_URL || 'http://tu-backend.com/api',
  headers: {
    'Content-Type': 'application/json',
  },
});

// Interceptores para manejar tokens
api.interceptors.request.use(config => {
  const user = JSON.parse(localStorage.getItem('user'));
  if (user?.token) {
    config.headers.Authorization = `Bearer ${user.token}`;
  }
  return config;
});

export default api;