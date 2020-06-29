import React from 'react';
import ReactDOM from 'react-dom';
import App from "./components/App";
import {BrowserRouter, Redirect, Route, Switch} from 'react-router-dom'
import About from "./components/About/About";
import FindRest from "./components/FindRest/FindRest";
import Contacts from "./components/Contacts/Contacts";
import Main from "./components/Main/Main";
import Header from "./components/Header/Header";
import Footer from "./components/Footer/Footer";
import {RestDetail} from "./components/RestDetail/RestDetail";
import Home from "./components/Admin/Home/Home";

if(document.getElementById('root')){
    ReactDOM.render(

        <BrowserRouter>
            <Header />
            <Switch>
                <Route path='/about' component={About} />
                <Route path='/restaurants' exact component={FindRest} />
                <Route path='/restaurants/:id' exact component={RestDetail} />
                <Route path='/contacts' component={Contacts} />
                <Route path='/home' exact component={Home} />
                <Route path='/' component={Main} />
                <Redirect to='/' exact />
                <App />
            </Switch>
            <Footer />
        </BrowserRouter>

        ,document.getElementById('root'));
}
