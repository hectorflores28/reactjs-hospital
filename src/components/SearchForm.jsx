import React, { useState } from 'react';
import { Form, InputGroup, Button } from 'react-bootstrap';

const SearchForm = ({ onSearch }) => {
  const [query, setQuery] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    onSearch(query);
  };

  return (
    <Form onSubmit={handleSubmit} className="mb-4">
      <InputGroup>
        <Form.Control
          type="search"
          placeholder="Buscar pacientes..."
          value={query}
          onChange={(e) => setQuery(e.target.value)}
          aria-label="Buscar"
        />
        <Button variant="outline-primary" type="submit">
          Buscar
        </Button>
      </InputGroup>
    </Form>
  );
};

export default SearchForm;