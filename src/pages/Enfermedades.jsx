import { useEffect, useState } from 'react';
import api from '../services/api';
import SearchForm from '../components/SearchForm';
import DataTable from '../components/DataTable';

export default function Enfermedades() {
  const [data, setData] = useState([]);
  const [searchTerm, setSearchTerm] = useState('');

  useEffect(() => {
    const fetchData = async () => {
      try {
        const endpoint = searchTerm 
          ? `/enfermedades?nombre=${searchTerm}`
          : '/enfermedades';
        const { data } = await api.get(endpoint);
        setData(data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };
    fetchData();
  }, [searchTerm]);

  const columns = [
    { header: '#', accessor: 'id' },
    { header: 'Nombre', accessor: 'nombre' },
    // ... demás columnas
  ];

  return (
    <div className="container">
      <SearchForm onSearch={setSearchTerm} />
      <DataTable columns={columns} data={data} />
    </div>
  );
}