import React from 'react';
import './styles.css';
import Foto_usuario from '../../assets/imagens/foto.png';
import Footer from '../Footer';
import HeaderLogin from '../HeaderLogin';

const Beneficiario = () => {

  const [dados, setDados] = React.useState(['']);
   

  React.useEffect(async() => {
      const resposta = await fetch('https://favela-back.herokuapp.com/');
      setDados(await resposta.json());
  }, []);

  console.log(dados);


    return(
      <React.Fragment>
        <HeaderLogin />
        <main className="d-sm-flex flex-column justify-content-center align-items-center align-self-center mt-5">
        <div className="linha">
        <section className="section1 my-5 ml-5 bg-light rounded-lg mt-5">        
            <img className="h-25 w-50 rounded img-fluid" src={Foto_usuario} />
            <a href="#" className="btn btn-primary btn-sm disabled" tabIndex="-1" role="button" aria-disabled="false">Atualizar foto</a>
            <h5 className="lead display-4 text-center text-dark">{dados[0].nome}</h5>
            <a href="#" className="btn btn-primary btn-md" tabIndex="-1" role="button" aria-disabled="false">Atualizar Nome</a>
            <h3 className="lead text-dark">Endereço: {dados[0].endereco}</h3>
            <h3 className="lead text-dark">Idade: {dados[0].idade}</h3>
            <h3 className="lead text-dark">contato: {dados[0].contato}</h3>
            <h3 className="lead text-dark">email: {dados[0].email}</h3>
            <a href="#" className="btn btn-danger btn-lg" tabIndex="-1" role="button" aria-disabled="false">Apagar Conta</a>
        </section>
            <div className="coluna ">
              <section className="section2 bg-light h-75 rounded-lg">
                <p className="lead text-dark">{dados[0].materiais}</p>
                <a href="#" className="btn btn-primary btn-md" tabIndex="-1" role="button" aria-disabled="false">Atualizar Descrição</a>
              </section>
              
            </div>
        </div>
        <div className="linha2 w-100 my-5 ml-5 d-none justify-content-center align-items-center">
              <section className="section2 bg-light h-75 rounded-lg">
                <p className="lead text-dark">{dados[0].materiais}</p>
                <a href="#" className="btn btn-primary btn-md" tabIndex="-1" role="button" aria-disabled="false">Atualizar Descrição</a>
              </section>
              
        </div>
        <h5 className="d-block lead mx-auto t text-dark text-md-center display-4" style={{fontSize: 52}}>Veja Meus Trabalhos</h5>
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
        <Footer />
      </React.Fragment>
    );
}

export default Beneficiario;