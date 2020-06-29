import React, {Component} from 'react';
import './Header.css'
import {Link, NavLink} from "react-router-dom";

class Header extends Component {
    render(){
        return (

            <div className="Header">
                <div className="container">
                    <div className="menu-block">
                        <nav className="Menu">
                            <NavLink to="/" exact className="menu-links" activeClassName="selected">
                                Главная
                            </NavLink>
                            <NavLink to="/about" className="menu-links" activeClassName="selected">
                                О нас
                            </NavLink>
                            <NavLink to="/restaurants" className="menu-links" activeClassName="selected">
                                Рестораны
                            </NavLink>
                            <NavLink to="/contacts" className="menu-links" activeClassName="selected">
                                Контакты
                            </NavLink>
                            <a href="/login" className="button-link" >
                                Войти как владелец
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

        );
    }
}

export default Header;
