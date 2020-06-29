import React from 'react'
import {Link} from 'react-router-dom'
import './FindRestItem.css'

export const FindRestItem = (props) => {
    return (
        <div className="FindRestItem__wrap FindRestItem__wrap_margin">
            <div className="FindRestItem__imageWrap">
                <img className="FindRestItem__image" src="/images/restImAGE.png" alt="#" />
            </div>
            <div className="FindRestItem__info">
                <h4 className="info__title">{props.r_name}</h4>
                <p className="info__text">{props.r_description}</p>
                <Link className="button-linkAlt"
                      to={{pathname: `/restaurants/${props.r_id}`}}
                >Подробнее</Link>
            </div>
        </div>
    )
}
