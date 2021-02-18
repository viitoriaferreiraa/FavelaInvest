const express = require('express');
const session = require('express-session');
// import express from 'express';// não suportada na minha versão de node pois meu SO é Win7
const cors = require('cors');
const mysql = require('mysql');


const server = express();
server.use(express.json());
server.use(bodyParse.urlendoded({extended:true}));
server.use(cors());

var timestamp = new Date().getTime();
console.log(timestamp)
const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "favelainvest"
})

server.post("/cadastro",(req,res)=>{
    var senha = req.body.senha
    var confSenha = req.body.senha2
    if (senha === confSenha) {
        connection.query("INSERT INTO usuarios( nome, email, senha, fk_tipo) values(?,?,?,?)",[req.body.nome,   req.body.email,req.body.senha,req.body.tipo],(error)=>{
            if (error) {
                res.send(error)
            } else {
                res.redirect('/login')
            }
         })
     }else{

     }
    }   
    
    )       

        
server.get("/usuario",(req,res)=>{

    connection.query("select * from usuarios",(error, result)=>{
       if (error) {
           res.send(error)
       } else {
           res.send(result)
       }
    })
});
server.post("/login",(req,res)=>{
    email = req.body.email
    senha = req.body.senha

    connection.query(`select * from usuarios where ${email} = email && ${senha} = senha`,(error, result)=>{
       if (error) {
           res.send(error)
       } else {
           res.render("../frontend/src/comnponentes/")
       }
    })
});
server.delete("/perfil",(req,res)=>{

    connection.query("delete from usuarios where id_usuario= {:id}",(error, result)=>{
       if (error) {
           res.send(error)
       } else {
           res.send(result)
       }
    })
});


server.listen(3, function(){
    console.log("rodou o servidor")
})