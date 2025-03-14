// FormGroup.jsx
import React from 'react';

const FormGroup = ({ label, type, name, placeholder, value, onChange }) => {
  return (
    <div className="form-group">
      <label>{label}:</label>
      <input
        type={type}
        name={name}
        className="form-control"
        placeholder={placeholder}
        value={value}
        onChange={onChange}
        required
      />
    </div>
  );
};

export default FormGroup;
