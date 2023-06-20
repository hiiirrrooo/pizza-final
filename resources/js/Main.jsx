import React from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Landing from './components/pages/LANDING/Landing.jsx'
import Ordering from './components/pages/ORDER/Ordering'
import LoginPage from './components/pages/LOGIN/LoginPage'
import NothingHere from './components/pages/NothingHere'
import SampTExt from './components/ui/SampTExt'

const Main = () => {
    return (
    <div>
      <BrowserRouter>
        <Routes>
          <Route index element={<Landing/>} />
          <Route path='/landing' element={<Landing/>} />
          <Route path='/ordering' element={<Ordering/>} />
          <Route path='/login' element={<LoginPage />} />
          <Route path='/samp' element={<SampTExt/>} />
          <Route path='*' element={<NothingHere/>} />
        </Routes>
      </BrowserRouter>
    </div>
    )
}

export default Main


