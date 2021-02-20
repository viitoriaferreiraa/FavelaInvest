import React from 'react';
import './styles.css';
import Foto_usuario from '../../assets/imagens/foto.png';
import Footer from '../Footer';
import HeaderLogin from '../HeaderLogin';

const Contribuidor = () => {

    const [info, setInfo] = React.useState([]);
   

    React.useEffect(async() => {
        const resposta = await fetch('https://favela-back.herokuapp.com/apiContribuidor.php');
        setInfo(await resposta.json());
    }, []);
  
    console.log(info[0]);


    return(
        <React.Fragment>
            <HeaderLogin />
        <main className="d-sm-flex flex-column justify-content-center align-items-center align-self-center mt-5">
        <div className="linha">
        <section className="section1 my-5 ml-5 bg-light rounded-lg">        
            <img className="h-25 w-50 rounded img-fluid " src={Foto_usuario} />
            <h5 className="lead display-4 text-center text-dark">{info[0].nome}</h5>
            <a href="#" className="btn btn-primary btn-md" tabIndex="-1" role="button" aria-disabled="false">Atualizar Nome</a>
            <h3 className="lead text-dark">Email: {info[0].email}</h3>
            <a href="#" className="btn btn-danger btn-lg" tabIndex="-1" role="button" aria-disabled="false">Apagar Conta</a>
        </section>
            <div className="coluna ">
              <section className="section2 bg-light h-75 rounded-lg">
                  <h5 className="d-block lead my-5 text-dark text-sm-center display-4" style={{fontSize: 52}}>Encontre empreendedores para ajudar</h5>
                <a className="btn btn-primary btn-lg" href="./busca" role="button">Buscar</a>
              </section>
              
            </div>
        </div>
  
        </main>
        <Footer />
        </React.Fragment>
    );
}

export default Contribuidor;