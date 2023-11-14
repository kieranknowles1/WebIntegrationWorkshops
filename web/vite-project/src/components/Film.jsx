import PropTypes from 'prop-types'

/**
 * A component to display details about a film
 *
 * @author Kieran Knowles
 * @generated GitHub Copilot was used to assist in generating this code
 */
function Film(props) {
    return (
        <div className='container'>
            <h2>{props.title}</h2>
            <ul>
                <li>Description: {props.description}</li>
                <li>Rating: {props.rating}</li>
                <li>Category: {props.category}</li>
            </ul>
        </div>
    )
}
Film.propTypes = {
    title: PropTypes.string.isRequired,
    description: PropTypes.string.isRequired,
    rating: PropTypes.number.isRequired,
    category: PropTypes.string.isRequired,
}

export default Film
