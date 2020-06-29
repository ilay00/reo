import React, {Component} from 'react';
import {RestDetailHeader} from "../RestDetailHeader/RestDetailHeader";
import {RestDetailForm} from "../RestDetailForm/RestDetailForm";
import { Redirect } from 'react-router-dom'

import './RestDetail.css';

export class RestDetail extends Component {

    constructor(props) {
        super(props);
        this.state = {
            id: this.props.match.params.id,
            restaurantData: null,
        };
    }

    componentDidMount() {
        const {id} = this.state;
        console.log(id)

        fetch(`/api/rest/view?r_id=${id}`)
            .then(res => res.json())
            .then ((result) => {
                    this.setState({
                        restaurantData: result
                        // restaurantData: result[id-1]
                    })
                },
                (error) => {
                    console.log(error)
                }
            )
    }

    render() {
        if (this.state.restaurantData) {
            return (<>
                <RestDetailHeader restData={this.state.restaurantData}/>
                <fieldset className='RestDetail-container RestDetail-description'>
                    <legend className='RestDetail-container_title RestDetail-description__title'>ОПИСАНИЕ РЕСТОРАНА
                    </legend>
                    <span className='RestDetail-description-text'>
                        {this.state.restaurantData.r_description}
                    </span>
                </fieldset>
                <fieldset className='RestDetail-container RestDetail-info'>
                    <legend className='RestDetail-container_title RestDetail-info__title'>КОНТАКТНЫЕ ДАННЫЕ</legend>
                    <div>
                        <span>Количество столов: {this.state.restaurantData.r_tables[10]}</span>
                        <span>Количество мест: {this.state.restaurantData.r_tables[23]}</span>
                        <span>Адрес: {this.state.restaurantData.r_address}</span>
                        <span>Телефон: {this.state.restaurantData.r_phone}</span>
                        <span>Сайт: <a href={this.state.restaurantData.r_site}>{this.state.restaurantData.r_name}</a></span>
                        <span>Email: {this.state.restaurantData.r_email}</span>
                    </div>
                </fieldset>
                <RestDetailForm id={this.state.restaurantData.r_id}/>
            </>)
        }
        return <h2>Loading...</h2>
    }
}
