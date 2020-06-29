import React, {Component} from 'react';
import './RestDetailHeader.css';

export const RestDetailHeader = (props) => {
        if (props.restData) {
            const {r_name, r_description} = props.restData;
            return (<div className='RestDetailHeader'>
                <h3 className='RestDetailHeader-title'>{r_name}</h3>
                <span className='RestDetailHeader-description'>{r_description}</span>
                <a href='#reserveForm' className="button-link button-link-btn">
                    Забронировать
                </a>
            </div>)
        } return null
}
