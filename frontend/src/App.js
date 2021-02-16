import React from 'react';
import { BrowserRouter , Routes , Route } from 'react-router-dom';
import './assets/css/global.css';
import Home from './paginas/Home';
import Error from './paginas/NotFound/Error';


function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="*" element={<Error />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
