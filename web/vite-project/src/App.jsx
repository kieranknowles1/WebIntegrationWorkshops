import { Routes, Route } from 'react-router-dom'
import React from 'react'

import Menu from './components/Menu'

import Actors from './pages/Actors'
import Facts from './pages/Facts'
import FilmListings from './pages/FilmListings'
import Home from './pages/Home'
import PageNotFound from './pages/PageNotFound'

import './App.css'

function App() {
    return (
    // A container tag is required to return multiple components
    // A common pattern is to use an empty tag `<>` to create a container
        <div className='app'>
            <nav><Menu /></nav>
            <Routes>
                <Route path='/' element={<Home />} />
                <Route path='/films' element={<FilmListings />} />
                <Route path='/actors' element={<Actors />} />
                <Route path='/facts' element={<Facts />} />
                {/* A catch-all route to redirect to the 404 page */}
                <Route path='*' element={<PageNotFound />} />
            </Routes>
        </div>
    )
}

export default App
