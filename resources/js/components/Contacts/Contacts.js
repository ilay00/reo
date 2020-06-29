import React, {Component} from 'react';
import './Contacts.css'

let submit = 'Ваше сообщение было отправлено, наш администратор свяжется с Вами с ближайшее время, спасибо за обрашение'

class Contacts extends Component {

    render() {
        return (
            <>
                <div>
                    <header className="head-contacts">
                        <h1 className="head-name">СВЯЖИТЕСЬ С НАМИ</h1>
                        <p className="head-text"> Для получения дополнительной информации, свяжитесь с нами</p>
                    </header>
                    <form className='form-connect' action="#" method="get">
                        <div className='form-input'>
                            <span className="form-name">СВЯЗАТЬСЯ</span>
                            <input type="name" placeholder='ФИО' required/>
                            <input type="tel" placeholder='номер телефона' required/>
                            <input type="email" placeholder='E-Mail' required/>
                            <input className='input-text' type="text"/>
                            <button type='submit' className="button-link">Отправить</button>
                        </div>
                    </form>
                </div>
            </>
        );
    }
}

export default Contacts;
