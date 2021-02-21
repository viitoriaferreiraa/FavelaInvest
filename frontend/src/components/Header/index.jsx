import React from 'react';
import { Link } from "react-router-dom";

const Header = () => {
    return (
        <React.Fragment>
             <header id="header" className="header fixed-top mb-5">
    <div className="container-fluid container-xl d-flex align-items-center justify-content-between">

      <Link to="/" className="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span>Favela Invest</span>
      </Link>

      <nav id="navbar" className="navbar">
        <ul>
          <li><Link className="nav-link scrollto " to="/">Pagina Inicial</Link></li>
          <li><Link className="nav-link scrollto" to="/cadastro">Cadastre-se</Link></li>
          <li><Link className="getstarted scrollto" to="/login">Login</Link></li>
        </ul>
        <i className="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
        </React.Fragment>
    );
}

export default Header;