import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Switch} from 'react-router-dom'
import Home from "./Home/Home";
import AdminApp from "./AdminApp";
import Footer from "../Footer/Footer";


if(document.getElementById('admin-root')){
    ReactDOM.render(

        <BrowserRouter>
            <Switch>
                <Route path='/home' component={Home} />
                <AdminApp />
            </Switch>
            <Footer />
        </BrowserRouter>

        ,document.getElementById('admin-root'));
}
