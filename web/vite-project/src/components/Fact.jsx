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
        <div className='text-center bg-orange-400 flex flex-col items-center'>
            <p>{params.fact}</p>
            {params.source &&
                <div className='flex flex-col items-center'>
                    <br />
                    <p className='w-fit p-1 bg-orange-500 rounded'>Source: {params.source}</p>
                </div>
            }
        </div>
    )
}
Fact.propTypes = {
    fact: PropTypes.string.isRequired,
    source: PropTypes.string
}

export default Fact
