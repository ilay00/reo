import React, {Component} from 'react';
import {EditInfo} from './EditInfo/EditInfo'
import {AddRest} from './AddRest/AddRest'
import {EditRest} from './EditRest/EditRest'
import './OwnerMenu.css'

class OwnerMenu extends Component {
    state ={
        infoData:{
            name: 'ООО ИНКОРПОРАТЕД',
            inn: '12345678',
            phone: '88005553535',
            site: 'lorem.com',
            email: 'lorem@ipsum-dolor.com'
        },
        restData: [
            {id: 1, name: 'Lorem', address: 'ipsum dolor', img: ''},
            {id: 2, name: 'Lorem', address: 'ipsum dolor', img: ''}
        ]
    }
    render() {
        const restaurantData = this.state.restData
        let restaurantElements = restaurantData.map((rest, key) => <EditRest {...rest} key={key} />)
        return (
            <div className="containerOwner">
                <div className="ownerWrap">
                    <EditInfo state={this.state.infoData} />
                    <AddRest />
                    {restaurantElements}
                </div>
            </div>
        )
    }
}

export default OwnerMenu