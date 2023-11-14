import React from 'react'

import Film from '../components/Film'

/**
 * Film listings page
 *
 * A page to display film listings
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in generating this code
 */
function FilmListings() {
    const films = [
        <Film key={1} title='Naming Things is Hard' description='It really is quite hard' rating={1000} category='Films' />,
        <Film key={2} title='What even are films?' description='I have no idea' rating={0} category='Fiction' />
    ]

    return (
        <>
            <h1>Film Listings</h1>
            {films}
        </>
    )
}

export default FilmListings
