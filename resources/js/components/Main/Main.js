import React, {Component} from 'react';
import './Main.css';
import {Link, NavLink} from "react-router-dom";

class Main extends Component {
    render() {
        return (

            <>
                <div className="main">
                    <div className="container">
                        <div className="main-page">
                            <h1>Найти и забронировать столик ?
                                Легко и просто!
                            </h1>
                            <NavLink to="/restaurants" className="button-link">
                                Найти ресторан
                            </NavLink>
                        </div>
                    </div>
                </div>
            </>
        );
    }
}

export default Main;
