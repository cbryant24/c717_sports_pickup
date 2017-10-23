import React from 'react';
import {Route} from 'react-router-dom';
import HomePage from './home_page';
import FindGame from './find_game';
import PostGame from './post_game';
import LoginPage from './login';
import YourGames from './your_games';
import stylebruh from '../assets/css/sportsfinder.css';
import NavBar from './nav_bar';



export default () => {
    return(
        <div>
            <NavBar/>
            <Route exact path="/" component={HomePage}/>
            <Route path="/find_game" component={FindGame}/>
            <Route path="/post_game" component= {PostGame} />
            <Route path="/login_page" component= {LoginPage} />
            <Route path='/your_games' component={ YourGames} />
        </div>
    )
}