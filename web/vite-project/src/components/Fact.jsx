import React from 'react'
import PropTypes from 'prop-types'

/**
 * Fact component
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in writing this code
 */
function Fact(params) {
    return (
        <div className='fact'>
            <p>{params.fact}</p>
            {params.source && <p>Source: {params.source}</p>}
        </div>
    )
}
Fact.propTypes = {
    fact: PropTypes.string.isRequired,
    source: PropTypes.string
}

export default Fact
