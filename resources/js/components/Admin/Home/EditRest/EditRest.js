import React from 'react'
import '../OwnerMenu.css'
import './EditRest.css'

export const EditRest = (props) => {
    return (
        <div className="ownerItem">
            <h3>{props.name}</h3>
            <p className="paddingAddress">{props.address}</p>
            <button className="button-linkAlt">Редактировать</button>
        </div>
    )
}
