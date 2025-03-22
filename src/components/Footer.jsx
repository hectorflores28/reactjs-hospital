import React from 'react';

const Footer = () => {
  return (
    <footer className="footer-hospital py-4">
      <div className="container px-4 px-lg-5">
        <div className="row align-items-center justify-content-between">
          <div className="col-lg-4 text-lg-start mb-3 mb-lg-0">
            <p className="small m-0 text-white">&copy; MediFinance 2024. Todos los derechos reservados.</p>
          </div>
          <div className="col-lg-4 text-center mb-3 mb-lg-0">
            <a href="#" className="mx-2"><i className="bi bi-facebook text-white fs-5"></i></a>
            <a href="#" className="mx-2"><i className="bi bi-twitter text-white fs-5"></i></a>
            <a href="#" className="mx-2"><i className="bi bi-instagram text-white fs-5"></i></a>
          </div>
          <div className="col-lg-4 text-lg-end">
            <a href="#" className="text-decoration-none me-3 text-white small">Políticas de Privacidad</a>
            <a href="#" className="text-decoration-none text-white small">Términos de Uso</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;