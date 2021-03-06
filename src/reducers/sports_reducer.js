import types from '../actions/types'

const DEFAULT_STATE= {
    active_games: [],
    single_game: {},
    lat_lon: {},
    user_game_history: {
        games: [],
        resp: false
    },
    auth: false,
    zipcode: '',
    game_id: '',
    auth: '',
};

export default function (state = DEFAULT_STATE, action) {
    switch (action.type){
        case types.GET_ACTIVE_GAMES:
            return {...state, active_games: action.payload}
        case types.GET_SINGLE_GAME:
            return {...state, single_game: action.payload}
        case types.UPDATE_LAT_LON:
            return {...state, lat_lon: action.payload}
        case types.GET_USER_HISTORY:
            return {...state, user_game_history: action.payload}
        case types.SIGN_IN:
            return {...state, auth: action.payload}
        case types.SIGN_OUT:
            return {...state, auth: action.payload}
        case types.CLEAR_USER_HISTORY:
        debugger
            return {...state, user_game_history: action.payload}
        case types.UPDATE_ZIPCODE:
            return {...state, zipcode: action.payload}
        case types.UPDATE_GAME_ID:
            return {...state, game_id: action.payload}
        case types.RESET_GAME_ID:
            return {...state, game_id: action.payload}
        case types.LEAVE_GAME:
            return {...state, user_game_history: action.payload}
        default:
            return state 
    }
}
