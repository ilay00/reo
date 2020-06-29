import React, {Component} from 'react';
import FindRest from "../FindRest/FindRest";
import './About.css'

let text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod\n' +
    '                        tempor incididunt ut\n' +
    '                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco\n' +
    '                        laboris nisi ut\n' +
    '                        aliquip ex ea commodo consequat.';
let text2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut\n' +
    '                        labore et dolore\n' +
    '                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\n' +
    '                        ex ea commodo\n' +
    '                        consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\n' +
    '                        incididunt ut labore et\n' +
    '                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut\n' +
    '                        aliquip ex ea\n' +
    '                        commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\n' +
    '                        incididunt ut\n' +
    '                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco\n' +
    '                        laboris nisi ut\n' +
    '                        aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\n' +
    '                        eiusmod tempor\n' +
    '                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\n' +
    '                        ullamco laboris\n' +
    '                        nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n' +
    '                        sed do eiusmod\n' +
    '                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\n' +
    '                        exercitation ullamco\n' +
    '                        laboris nisi ut aliquip ex ea commodo consequat.';
let text3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed\n' +
    '                                do eiusmod tempor\n' +
    '                                incididunt ut labore et dolore\n' +
    '                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut\n' +
    '                                aliquip ex ea\n' +
    '                                commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\n' +
    '                                eiusmod tempor incididunt\n' +
    '                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud';
let text4 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed\n' +
    '                                do eiusmod tempor\n' +
    '                                incididunt ut labore et dolore\n' +
    '                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut\n' +
    '                                aliquip ex ea\n' +
    '                                commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\n' +
    '                                eiusmod tempor incididunt\n' +
    '                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud';

class About extends Component {
    render() {
        return (
            <>
          <div className='head-about'>
              <h1 className="head-name">РАБОТАЕМ, ЧТОБЫ ВАМ БЫЛО ЧТО ВЫБРАТЬ</h1>
              <p className="head-text"> {text}</p>
          </div>
                <div className='main-block'>
                    <p className="main-text-block">{text2}</p>
                </div>
                <div className="main-block-img-with-capture">
                    <img className="img" src="/images/table.png" alt="здесь будет картинка" height="285" width="456"/>
                    <p className="main-img-capture">{text3}</p>
                    <p className="main-img-capture">{text4}</p>
                    <img className="img" src="/images/table.png" alt="здесь будет картинка" height="285" width="456"/>
                </div>
             </>
                )
           ;
    }
}
export default About;
