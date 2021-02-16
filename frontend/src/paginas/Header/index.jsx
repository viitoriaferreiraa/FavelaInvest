import React from 'react';
import './styles.css';
import logo from '../../assets/imagens/favelalogo.png';
import icon from '../../assets/imagens/icon.png';

const Header = () => {
    return (
        <nav id="header">
            <ul className="nav justify-content-between pt-3 nav-pills ">
                <li className="nav-item dropdown">
                    <a className="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img id="forma2" src={icon} /></a>
                    <div className="dropdown-menu">
                    <a className="dropdown-item" href="#">Action</a>
                    <a className="dropdown-item" href="#">Another action</a>
                    <a className="dropdown-item" href="#">Something else here</a>
                    <div className="dropdown-divider"></div>
                    <a className="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="/"><img className="rounded img-thumbnail img-fluid" id="logo2" src={logo} alt="Logotipo Favela Invest"/></a>
                </li>
                <li className="nav-item">
                    <a className="nav-link" href="/" tabIndex="-1" aria-disabled="false"><div id="forma1"></div></a>
                </li>
            </ul>
        </nav>
    );
}

export default Header;