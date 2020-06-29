import React from 'react'
import '../OwnerMenu.css'
import './EditInfo.css'

export const EditInfo = (props) => {
    return (
        <div className="ownerItem">
            <h3>Информация о пользователе</h3>
            <div>
                <table>
                    <tr>
                        <td className="mainText">Название:</td>
                        <td>{props.state.name}</td>
                    </tr>
                    <tr>
                        <td className="mainText">ИНН:</td>
                        <td>{props.state.inn}</td>
                    </tr>
                    <tr>
                        <td className="mainText">Телефон:</td>
                        <td>{props.state.phone}</td>
                    </tr>
                    <tr>
                        <td className="mainText">Сайт:</td>
                        <td>{props.state.site}</td>
                    </tr>
                    <tr>
                        <td className="mainText">E-mail:</td>
                        <td>{props.state.email}</td>
                    </tr>
                </table>
            </div>
            <button className="button-linkAlt marginButton">Редактировать</button>
        </div>
    )
}
