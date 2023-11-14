import { Link } from 'react-router-dom'
import React from 'react'

/**
 * Menu component
 *
 * A component to display a menu of routes
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in generating this code
 */
function Menu() {
    return (
        <ul>
            <li><Link to='/'>Home</Link></li>
            <li><Link to='/films'>Film Listings</Link></li>
            <li><Link to='/actors'>Actors</Link></li>
        </ul>
    )
}

export default Menu
