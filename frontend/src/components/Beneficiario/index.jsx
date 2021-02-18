import React from 'react';
import './styles.css';
import Foto_usuario from '../../assets/imagens/foto.png';

const Beneficiario = () => {
    return(
        <main className="d-sm-flex flex-column justify-content-center align-items-center align-self-center">
        <div className="linha">
        <section className="section1 my-5 ml-5 bg-light rounded-lg">        
            <img className="h-25 w-50 rounded img-fluid " src={Foto_usuario} />
            <h5 className="lead display-4 text-center text-dark">Nome usuario</h5>
            <h3 className="lead text-dark">Ramo: </h3>
            <h3 className="lead text-dark">Idade: </h3>
            <h3 className="lead text-dark">Local: </h3>
        </section>
            <div className="coluna ">
              <section className="section2 bg-light h-75 rounded-lg">
                <p className="lead text-dark">Conheça minha história</p>
              </section>
              
            </div>
        </div>
        <h5 className="d-block lead mx-5 text-dark text-sm-center display-4" style={{fontSize: 52}}>Veja Meus Trabalhos</h5>
        <hr className="bg-dark w-50" />
        <section className="trabalhos px-5">
          <button type="button" className="btn btn-primary btn-lg">Contribuir</button>
          <div className="fotos mt-5">
            <div><img className="w-100 h-100" src="./assets/imagens/perfil.jpeg" alt="" /></div>
            <div> <img className="w-100 h-100" src="./assets/imagens/perfil2.jpeg" alt="" /></div>
            <div> <img className="w-100 h-100" src="./assets/imagens/perfil3.jpeg" alt="" /></div>
          </div>
        </section>
        </main>
    );
}

export default Beneficiario;