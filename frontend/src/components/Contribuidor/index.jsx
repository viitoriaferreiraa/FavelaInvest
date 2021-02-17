import React from 'react';
import './styles.css';
import Foto_usuario from '../../assets/imagens/foto.png';

const Contribuidor = () => {
    return(
        <main className="d-sm-flex flex-column justify-content-center align-items-center align-self-center">
        <div className="linha">
        <section className="section1 my-5 ml-5 bg-light rounded-lg">        
            <img className="h-25 w-50 rounded img-fluid " src={Foto_usuario} />
            <h5 className="lead display-4 text-center text-dark">Nome usuario</h5>
            <h3 className="lead text-dark">Email: </h3>
        </section>
            <div className="coluna ">
              <section className="section2 bg-light h-75 rounded-lg">
                  <h5 className="d-block lead my-5 text-dark text-sm-center display-4" style={{fontSize: 52}}>Encontre empreendedores para ajudar</h5>
                <a class="btn btn-primary btn-lg" href="#" role="button">Buscar</a>
              </section>
              
            </div>
        </div>
  
        </main>
    );
}

export default Contribuidor;