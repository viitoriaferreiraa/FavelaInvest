import React from 'react';
import './styles.css';
// import Foto_busca from '../../assets/imagens/caret-square.svg';

const Busca = () => {
    return(
        <main className="d-sm-flex flex-column justify-content-center align-items-center align-self-center my-5">
            <form className="w-25 my-5"> 
                <div class="form-group">
                    <label className="lead text-sm-dark text-sm-center w-100" htmlFor="regiao">Busque por região</label>
                    <select className="form-control" id="regiao">
                    <option>Brasilândia</option>
                    <option>2</option>
                    </select>
                </div>
            </form>

  
        </main>
    );
}

export default Busca;