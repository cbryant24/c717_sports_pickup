import React, { Component } from 'react';
import {Route, withRouter} from 'react-router-dom';
import HomePage from './home_page';
import FindGame from './find_game';
import PostGame from './post_game';
import LoginPage from './login';
import YourGames from './your_games';
import stylebruh from '../assets/css/sportsfinder.css';
import NavBar from './nav_bar';
import { connect } from 'react-redux';
import { sign_in } from '../actions';
import Side_Nav from './side_nav'




class App extends Component {
    componentWillMount() {
        this.props.sign_in();
    }
    background_dismiss() {
        console.log('hello front page')
    }


    render() {
        return (
            <div>
                <Side_Nav/>
                <NavBar/>
                <Route exact path="/" component={HomePage}/>
                <Route path="/find_game" component={FindGame}/>
                <Route path="/post_game" component= {PostGame} />
                {/* <Route path="/login_page" component= {LoginPage} /> */}
                <Route path='/your_games' component={ YourGames} />
            </div>

        )
    }
}

export default withRouter(connect(null, { sign_in})(App))