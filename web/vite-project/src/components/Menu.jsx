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
    const items = [
        { name: 'Home', path: '/' },
        { name: 'Film Listings', path: '/films' },
        { name: 'Actors', path: '/actors' },
        { name: 'Facts', path: '/facts' }
    ]
    const itemsElements = items.map((item) => {
        return (
            <li key={item.path} className='hover:bg-orange-300'>
                <Link to={item.path}>{item.name}</Link>
            </li>
        )
    })

    return (
        <nav className='bg-orange-400'>
            <ul className='flex flex-col md:flex-row justify-evenly'>
                {itemsElements}
            </ul>
        </nav>
    )
}

export default Menu
