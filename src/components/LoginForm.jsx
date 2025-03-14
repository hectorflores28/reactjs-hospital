import React, { useState } from 'react';

const LoginForm = () => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const [rememberMe, setRememberMe] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();
    // Aquí iría la lógica para manejar el envío del formulario
    console.log({ username, password, rememberMe });
    // Limpiar campos después del envío
    setUsername('');
    setPassword('');
    setRememberMe(false);
  };

  return (
    <form id="login-form" className="form" onSubmit={handleSubmit}>
      <div className="form-group">
        <label htmlFor="username">Usuario</label><br />
        <input
          type="text"
          name="usuario"
          id="username"
          className="form-control"
          placeholder="Escribe tu usuario"
          required
          value={username}
          onChange={(e) => setUsername(e.target.value)}
        />
      </div>
      
      <div className="form-group">
        <label htmlFor="password">Contraseña:</label><br />
        <input
          type="password"
          name="contrasena"
          id="password"
          className="form-control"
          placeholder="Escribe tu contraseña"
          required
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />
      </div>
      
      <div className="form-group">
        <label htmlFor="remember-me">
          <span>Recordarme</span>{' '}
          <span>
            <input
              id="remember-me"
              name="remember-me"
              type="checkbox"
              checked={rememberMe}
              onChange={(e) => setRememberMe(e.target.checked)}
            />
          </span>
        </label><br />
        <button type="submit" className="btn btn-info btn-md">
          Enviar
        </button>
      </div>
    </form>
  );
};

export default LoginForm;