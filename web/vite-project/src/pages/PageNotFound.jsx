import React from 'react'

import blep from '../assets/blep.jpeg'

/**
 * 404 page
 *
 * The page to display when a route is not found
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in generating this code
 */
function Home() {
    return (
        <>
            <h1>404 - Page Not Found</h1>
            <img src={blep} alt='blep' height='500px' />
            <p>Source - Kieran Knowles</p>

            <p>Millie is very confused why you are on this page, she forgot to put her toungue away. She is also very cute.</p>
        </>
    )
}

export default Home
