import React from 'react'; 
import { BrowserRouter , Routes , Route } from "react-router-dom";
import Beneficiario from './components/Beneficiario';
import Cadastro from './components/Cadastro';
import Login from './components/Login';
import Contribuidor from './components/Contribuidor';
import HomePage from './Views/landpage';

function App(){
    return(
    <BrowserRouter>

        <Routes>
            <Route path="/" element={<HomePage />} />
            <Route path="/produtos" element={<Login />} />
            <Route path="/loja" element={<Cadastro
             />} />
            <Route path="/contato" element={<Beneficiario /> } />
            <Route path="/pedidos" element={<Contribuidor />} />
        </Routes>
    </BrowserRouter>
    );
}

