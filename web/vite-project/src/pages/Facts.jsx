import React from 'react'

import Fact from '../components/Fact'

function getFact(setFact, setLoading, setError) {
    setFact(null)
    setLoading(true)
    setError(false)
    fetch('https://w20013000.nuwebspace.co.uk/week5/facts')
        .then(response => response.json())
        .then(json => {
            setFact(<Fact {...json} />)
        })
        .catch(error => {
            console.error(error)
            setError(true)
        })
        .finally(() => setLoading(false))
}

/**
 * Facts page
 *
 * A page to display a list of actors
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in generating this code
 */
function Facts() {
    const [loading, setLoading] = React.useState(true)
    const [error, setError] = React.useState(false)
    const [fact, setFact] = React.useState([])

    React.useEffect(() => {
        getFact(setFact, setLoading, setError)
    }, [])

    return (
        <>
            <h1>Facts</h1>
            <p>Welcome to the facts page!</p>
            <button onClick={() => getFact(setFact, setLoading, setError)}>Get a fact</button>
            {loading && <p>Loading facts...</p>}
            {error && <p>Unable to load facts. See console for details.</p>}
            {fact}
            <p>
                Please note that the facts on this page are not guaranteed to be
                safe, legal, ethical, truthful, factual, or useful. Except for
                the ones criticising the tories, the imperial system of units,
                or the one about lesbian space pirates (look it up, I only slightly exaggerated it)
                those are all true. Yes. I know that&apos;s a strange combination of exceptions.
                <br />
                I take no responsibility for any consequences of using the facts
                on this page whether they are legal, social, or result in any
                injury or death.
            </p>
        </>
    )
}

export default Facts
