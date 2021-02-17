import React from 'react';
import './styles.css';
import Foto_busca from '../../assets/imagens/perfil.jpeg';

const Busca = () => {
    return(
        <React.Fragment>
            <main className="container-busca d-sm-flex flex-column h-100 justify-content-center align-items-center align-self-center">
                <form className="w-25 mt-5"> 
                    <div className="form-group">
                        <label className="lead text-sm-dark text-sm-center w-100" htmlFor="regiao">Busque por região</label>
                        <select className="form-control" id="regiao">
                        <option>Brasilândia</option>
                        <option>2</option>
                        </select>
                    </div>
                </form> 
            </main>
            <section className="row mt-5 mx-0 container-card d-sm-flex flex-sm-wrap justify-content-sm-wrap align-items-sm-center">
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


            <section className="row mt-5 mx-0 d-sm-flex flex-sm-wrap justify-content-sm-wrap align-items-sm-center">
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
        </React.Fragment>
    );
}

export default Busca;