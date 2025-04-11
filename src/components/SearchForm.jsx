import React, { useState } from 'react';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';

const SearchForm = ({ onSearch }) => {
  const [query, setQuery] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    onSearch(query);
  };

  return (
    <form onSubmit={handleSubmit} className="mb-4">
      <div className="input-group">
        <input
          type="search"
          className="form-control"
          placeholder="Buscar pacientes..."
          value={query}
          onChange={(e) => setQuery(e.target.value)}
          aria-label="Buscar"
        />
        <button className="btn btn-outline-primary" type="submit">
          Buscar
        </button>
      </div>
    </form>
  );
};

export default SearchForm;