// Aqui séra a página que informará ao cliente que não há nenhuma rota indicada, caso ele clique em algum lugar inexistente.

import React from 'react';

const NotFound =() => {
    return(
        <>
            <h1 className="notfound"><mark>Infelizmente não encontramos esta página ):</mark></h1>
            <p className="notfound2">por favor, tente novamente em alguns instantes</p>
        </>
    )
}

export default NotFound;