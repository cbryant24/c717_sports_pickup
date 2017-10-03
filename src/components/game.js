import React from 'react';
import { connect } from 'react-redux';
import { get_single_game } from '../actions';

 const Game = props => {
    const {description, game_date, game_time, game_title, vibe, game_id} = props.game_info
    
    const handle_view_click = () => {
        props.get_single_game(game_id)
        
    }

    return (
        <div className='single-game row'>
            <div className='col-3 textpad'>{game_title}</div>
            <div className='col-3 textpad'>{`${game_date} ${game_time}`}</div> 
            <div className='col-2 textpad'>{ vibe }</div>
            <div className='col-4'>
                <button onClick={ () => handle_view_click() } className='btn btn-outline btn-xl viewbtn'>View</button>
            </div>
        </div>
    )
}

export default connect(null, { get_single_game})(Game)