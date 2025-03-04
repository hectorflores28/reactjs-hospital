import React from "react";

// Hero Componente
const Hero = () => {
    const [formularioCURP, setFormularioCURP] = React.useState('');

    const cargarFormulario = () => {
        fetch('formulariocurp.php')
            .then(response => response.text())
            .then(data => setFormularioCURP(data));
    };

    return (
        <div className="row gx-4 gx-lg-5 align-items-center my-5">
            <div className="col-lg-7">
                <img className="img-fluid rounded mb-4 mb-lg-0" src="img/curp.jpg" alt="..." />
            </div>
            <div className="col-lg-5">
                <h1 className="font-weight-light">¿Conoces tu CURP?</h1>
                <p>La consulta puede realizarse a través del formulario.</p>
                <button
                    onClick={cargarFormulario}
                    className="btn btn-primary"
                >
                    Cargar Formulario
                </button>
                {formularioCURP && (
                    <div id="CURPtabla" dangerouslySetInnerHTML={{ __html: formularioCURP }} />
                )}
            </div>
        </div>
    );
};