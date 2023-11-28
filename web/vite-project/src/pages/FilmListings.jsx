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
    const [loading, setLoading] = React.useState(true)
    const [films, setFilms] = React.useState([])
    // `fetch` returns a promise that resolves to a response object
    // `Promise.then` is used to handle the response once it is available
    // `Promise.catch` is used to handle any errors that occur
    // NOTE: This will not work from localhost due to CORS restrictions
    React.useEffect(() => {
        console.log('Fetching film listings...')
        fetch('https://w20013000.nuwebspace.co.uk/week5/films')
            .then(response => response.json())
            .then(json => {
                setFilms(json.map((film, index) => <Film key={index} {...film} />))
            })
            .catch(error => {
                console.error(error)
                setFilms(<p>Unable to load film listings. See console for details.</p>)
            })
            .finally(() => setLoading(false))
    }, [])

    return (
        <>
            <h1>Film Listings</h1>
            {loading && <p>Loading film listings...</p>}
            {films}
        </>
    )
}

export default FilmListings
