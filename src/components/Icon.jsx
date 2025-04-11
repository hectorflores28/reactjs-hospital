import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { 
  faPhone, 
  faEnvelope, 
  faClock,
  faCheckCircle 
} from '@fortawesome/free-solid-svg-icons';

const Icon = ({ name, ...props }) => {
  const iconMap = {
    phone: faPhone,
    envelope: faEnvelope,
    clock: faClock,
    check: faCheckCircle
  };

  return <FontAwesomeIcon icon={iconMap[name]} {...props} />;
};

export default Icon; 