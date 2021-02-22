import React from 'react';
import './styles.css';
import Foto_busca from '../../assets/imagens/perfil.jpeg';
import Footer from '../Footer';
import HeaderLogin from '../HeaderLogin';

const Busca = () => {

    const [busca, setBusca] = React.useState(['']);
   

    React.useEffect(async() => {
        const resposta = await fetch('https://favela-back.herokuapp.com/');
        setBusca(await resposta.json());
    }, []);
  
    console.log(busca);

    return(
        <React.Fragment>
            <HeaderLogin />
            <main className="container-busca d-sm-flex flex-column h-100 justify-content-center align-items-center align-self-center mt-5">
                <form className="w-75 mx-auto mt-5"> 
                    <div className="form-group">
                        <label className="lead text-sm-dark text-sm-center w-100" htmlFor="regiao">Busque por região</label>
                        <select className="form-control my-5" id="regiao">
                        <option>Brasilândia</option>
                        </select>
                    </div>
                </form> 
            </main>
            <section className="row mx-0 container-card d-sm-flex flex-sm-wrap justify-content-sm-wrap align-items-sm-center">
                <div className="card my-5 mx-2 bg-transparent border-0 h-50" id="card-busca" style={{width: "20rem"}}>
                    <img src={Foto_busca} className="card-img-top img-fluid rounded" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title text-sm-dark text-sm-center">{busca[0].nome}</h5>
                        <p className="card-text text-sm-dark">{busca[0].materiais}</p>
                        <a href="#" className="btn btn-primary btn-lg">Contribuir</a>
                    </div>
                </div>     

            </section>


            <section className="row mb-5 mx-0 d-none flex-sm-wrap justify-content-sm-wrap align-items-sm-center">
                <div className="card my-5 mx-2 bg-transparent border-0 h-50" id="card-busca" style={{width: "20rem"}}>
                    <img src={Foto_busca} className="card-img-top img-fluid rounded" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title text-sm-dark text-sm-center">Celia</h5>
                        <p className="card-text text-sm-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" className="btn btn-primary btn-lg">Contribuir</a>
                    </div>
                </div>     

                <div className="card my-5 mx-2 bg-transparent border-0 h-50" id="card-busca" style={{width: "20rem"}}>
                    <img src={Foto_busca} className="card-img-top img-fluid rounded" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title text-sm-dark text-sm-center">Celia</h5>
                        <p className="card-text text-sm-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" className="btn btn-primary btn-lg">Contribuir</a>
                    </div>
                </div>     

                <div className="card my-5 mx-2 bg-transparent border-0 h-50" id="card-busca" style={{width: "20rem"}}>
                    <img src={Foto_busca} className="card-img-top img-fluid rounded" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title text-sm-dark text-sm-center">Celia</h5>
                        <p className="card-text text-sm-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" className="btn btn-primary btn-lg">Contribuir</a>
                    </div>
                </div>     

                <div className="card my-5 mx-2 bg-transparent border-0 h-50" id="card-busca" style={{width: "20rem"}}>
                    <img src={Foto_busca} className="card-img-top img-fluid rounded" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title text-sm-dark text-sm-center">Celia</h5>
                        <p className="card-text text-sm-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" className="btn btn-primary btn-lg">Contribuir</a>
                    </div>
                </div> 
            </section>
            <Footer />
        </React.Fragment>
    );
}

export default Busca;