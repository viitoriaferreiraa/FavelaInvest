import React from 'react';
import { Link } from "react-router-dom";

const Footer = () => {
    return (
        <React.Fragment>
  <footer id="footer" className="footer mt-5">
    <div className="footer-top">
      <div className="container">
        <div className="row gy-4">
          <div className="col-lg-5 col-md-12 footer-info">
            <Link to="/" className="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="" />
              <span>Favela Invest</span>
            </Link>
            <p><strong>Da Favela para Favela</strong></p>
            <div className="social-links mt-3">
              <a href="https://twitter.com/InvestFavela" className="twitter">Twitter<i className="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100063423523701" className="facebook">Facebook<i className="bi bi-facebook"></i></a>
            </div>
          </div>

          <div className="col-lg-2 col-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i className="bi bi-chevron-right"></i> <a href="https://pipe.social/produtos/mapa2019">2º Mapa de Negócios de Impacto 2019</a></li>
              <li><i className="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i className="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i className="bi bi-chevron-right"></i> <a className="text-secondary disabled" aria-disabled="true" href="#">Conheça nossos termos de serviço</a></li>
              <li><i className="bi bi-chevron-right"></i> <a className="text-secondary disabled" aria-disabled="true" href="#">Politica de Privacidade</a></li>
            </ul>
          </div>

          <div className="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Encontre-nos</h4>
               <a className="mb-4" href="https://favela-invest.herokuapp.com/" target="_blank" rel="noopener noreferrer"><strong>Web Site</strong></a><br />
              <strong>Email:</strong> favela-invest@bol.com.br<br />
              <a className="mb-4" href="https://www.youtube.com/channel/UClgVTTPAO7NXsgBDk-0wKgQ" target="_blank" rel="noopener noreferrer"><strong>Youtube</strong></a><br />       

          </div>

        </div>
      </div>
    </div>

    <div className="container">
      <div className="copyright">
        &copy; Copyright <strong><span>Favela Invest</span></strong>. Todos os direitos reservados
      </div>
     
    </div>
  </footer>
        </React.Fragment>
    );
}

export default Footer;