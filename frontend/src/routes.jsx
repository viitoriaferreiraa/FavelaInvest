import React from 'react'; 
import {Routes, Route} from 'react-router-dom';

import Beneficiario from './components/Beneficiario';
import Cadastro from './components/Cadastro';
import Login from './components/Login';
import HomePage from './Views/landpage';

function App(){
    return(
        
        <Provider store={store}>
            <Router>
                <LandPage/>
            </Router>
        </Provider>
    );
}

