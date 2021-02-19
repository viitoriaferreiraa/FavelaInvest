import React from 'react';
import './styles.css';
import Foto from '../../assets/imagens/rectangle.png';

const Cadastro = () => {
    return(
        <main id="main_cadastro" className="d-flex mt-0 h-100">        
        <section  className="container-cadastro mx-0 w-50 h-100 d-md-flex flex-column justify-content-sm-around align-items-sm-center">
        <form action="http://localhost/backend/cadastro_usuarios.php" method="POST" className="form-group w-75 h-100">          
            <legend className="text-white mt-3">Cadastre-se</legend>
            <label className="w-75 text-white" htmlFor="nome" id="lNome">Nome</label>
            <input className="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="text" name="nome" id="nome" />
            <label className="w-75 text-white" htmlFor="email" id="lEmail">Email</label>
            <input className="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="email" name="email" id="email" />
            <label className="w-75 text-white" htmlFor="senha" id="lSenha">Senha</label>
            <input className="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="password" name="senha" id="senha" />
            <label className="w-75 text-white" htmlFor="email" id="lEmail">Confirmação da Senha</label>
            <input className="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="password" name="senha2" id="senha2" />
            <div className="form-check form-check-inline w-25 mt-3">
                <input className="form-check-input" type="radio" name="tipo"  value="1" checked  />
                <label className="form-check-label" htmlFor="inlineRadio1">Colaborador</label>
            </div>
            <div className="form-check form-check-inline w-25">
                <input className="form-check-input" type="radio" name="tipo" value="2" />
                <label className="form-check-label" htmlFor="inlineRadio2">Beneficiario</label>
            </div>
            <div className="btn-group w-75 mt-3" role="group" aria-label="Basic example">
                <a className="btn d-md-flex text-white w-25" href="#" role="button">Já possui cadastro?</a>
                <button type="submit" className="btn btn-outline btn-lg ml-5 text-white border-light">Cadastrar</button>
            </div>
        </form>
        </section>
    <section className="container-img  w-50 h-100 d-md-flex justify-content-sm-center align-items-sm-center align-self-sm-center">
        <img src={Foto} className="img-fluid" />
    </section>

        </main>
    );
}

export default Cadastro;