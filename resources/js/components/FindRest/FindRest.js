import React, {Component} from 'react';
import {FindRestItem} from "./FindRestItem/FindRestItem"
import './FindRest.css'

class FindRest extends Component {
    constructor(props) {
        super(props);
        this.state = {value: '', restaurantData: [], limit:''}
    
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.getLimit = this.getLimit.bind(this);
        this.loadMore = this.loadMore.bind(this);
    }

    componentDidMount() {
        this.getLimit()

        fetch('/api/rest/list')
        .then(res => res.json())
        .then ((result) => {
            this.setState({
                restaurantData: result
            })
        },
            (error) => {
                console.log(error)
            }
        )
    }

    handleChange(event) {
        this.setState({value: event.target.value});
    }
    
    handleSubmit(event) {
        fetch(`/api/rest/list?name=${this.state.value}`)
        .then(res => res.json())
        .then ((result) => {
            this.setState({
                restaurantData: result
            })
        },
            (error) => {
                console.log(error)
            }
        )
        event.preventDefault();
        this.getLimit()
    }

    getLimit() {
        this.setState({
            limit: 3
        })
    }

    loadMore() {
        this.setState({
            limit: this.state.limit + 3
        });
    }

    render() {
        const restaurantData = this.state.restaurantData
        let restaurantElements = restaurantData.slice(0, this.state.limit).map((rest, key) => (
            <FindRestItem {...rest} key={key} />
            )
        )

        return (
            <>
                 <div className="FindRest">
                    <div className="FindRest__container">
                        <div className="FindRest__titleWrap">
                            <h2 className="FindRest__title">Найдите свой ресторан</h2>
                        </div>
                        <div className="FindRest__searchForm FindRest__searchForm_margin">
                            <form onSubmit={this.handleSubmit}>
                                <input className="FindRest__input" value={this.state.value} onChange={this.handleChange} placeholder="Найти ресторан"/>
                                <button className="button-linkAlt" type="submit">Поиск</button>
                            </form>
                        </div>
                        <div>
                            {restaurantElements}
                        </div>
                        <button className="button-linkAlt" onClick={this.loadMore}>Показать еще</button>
                    </div>
                </div>
            </>
        );
    }
}

export default FindRest;
