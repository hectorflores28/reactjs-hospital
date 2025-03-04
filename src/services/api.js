import axios from 'axios';

const api = axios.create({
  baseURL: 'http://tu-api.com',
  headers: {
    'Content-Type': 'application/json'
  }
});

export const getEnfermedades = async (searchTerm) => {
  const response = await api.get(`/enfermedades?search=${searchTerm}`);
  return response.data;
};
