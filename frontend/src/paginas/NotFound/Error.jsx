import React from 'react';
import './styles.css';

const Error = () => {
    return(
        <React.Fragment>
            <section id="logo">
                <main className="container d-flex flex-column align-items-center justify-content-center">
                        <h2 className="display-3 mt-5 text-sm-center jumbotron">Pagina não encontrada</h2>
                        <a href="/" className="btn btn-success btn-lg h-25 my-5" tabIndex="-1" role="button" aria-disabled="false">Voltar</a>
                </main>
            </section>
        </React.Fragment>
    );
}

export default Error;