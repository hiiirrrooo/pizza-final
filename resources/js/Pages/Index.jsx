import React from 'react'
import Button from '@mui/material/Button'
import { useNavigate } from 'react-router-dom'

const Home = () => {
  const navigate = useNavigate();
  const login = () => {
    navigate('/signin')
  }
  const newOrder = () => {
    navigate('/order')

  }
    return (
        <div>
            <Button onClick={()=>login()}>Log in</Button>
            <Button onClick={()=>newOrder()}>Order </Button>
            
        </div>
    )
}

export default Home