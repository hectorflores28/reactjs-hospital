import React from 'react';
import { Container } from 'react-bootstrap';
import Hero from '../components/Hero';
import TarjetasExtras from '../components/TarjetasExtras';

const Home = () => {
  return (
    <Container>
      <Hero />
      <TarjetasExtras />
    </Container>
  );
};

export default Home; 