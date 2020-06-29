import React, {Component} from 'react';

class AdminApp extends Component {
    render(){
        return (
            <>
                { this.props.children }
            </>
        );
    }
}

export default AdminApp;
