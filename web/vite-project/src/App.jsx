import React from 'react'

import Hello from './components/Hello'
import Film from './components/Film'

import doughnut from './assets/doughnut.jpg'

import './App.css'

function App() {
    // Const is a bit misleading here, the value will be changed by the `setCount` function.
    // Just that the variable itself is not reassigned and can only be changed by the `setCount` function
    const [count, setCount] = React.useState(0)

    const films = [
        <Film key={1} title='Naming Things is Hard' description='It really is quite hard' rating={1000} category='Films' />,
        <Film key={2} title='What even are films?' description='I have no idea' rating={0} category='Fiction' />
    ]

    return (
    // A container tag is required to return multiple components
    // A common pattern is to use an empty tag `<>` to create a container
        <>
            <div className='container'>
                <img className='float-right' src={doughnut} alt='A doughnut' height={400} />
                <p>Photo by Viktoriia Kondratiuk: https://www.pexels.com/photo/three-donuts-stacked-on-top-of-each-other-with-lights-18783672/</p>
            </div>
            {/* `<Hello />` references the Hello component declared above */}
            <Hello />
            <button onClick={() => setCount(count + 1)}>Click me</button>
            <p>Count: {count}</p>
            <h1>Film Listings</h1>
            {films}
        </>
    )
}

export default App
