import React from 'react'; 
import { BrowserRouter , Routes , Route } from "react-router-dom";
import Beneficiario from './components/Beneficiario';
import Cadastro from './components/Cadastro';
import Login from './components/Login';
import Contribuidor from './components/Contribuidor';
import HomePage from './Views/landpage';
import Erro from './Views/notfound';
import Busca from './components/Busca/';

function App(){
    return(
    <BrowserRouter>
        <Routes>
            <Route path="/" element={<HomePage />} />
            <Route path="/login" element={<Login />} />
            <Route path="/cadastro" element={<Cadastro
             />} />
            <Route path="/beneficiario" element={<Beneficiario /> } />
            <Route path="/contribuidor" element={<Contribuidor />} />
            <Route path="/busca" element={<Busca />} />
            <Route path="*" element={<Erro />} />
        </Routes>
    </BrowserRouter>
    );
}

export default App;