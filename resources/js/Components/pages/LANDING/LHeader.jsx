import React from 'react'
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import Container from '@mui/material/Container';
import Button from '@mui/material/Button';
import Stack from '@mui/material/Stack';
import Avatar from "@mui/material/Avatar";
import { grey, yellow } from '@mui/material/colors';
import AccountCircleIcon from '@mui/icons-material/AccountCircle';
import { Grid } from "@mui/material";
import { useNavigate } from 'react-router-dom';

import PizzaLogo from '/resources/images/PIZZA_LOGO.gif'

const settings = ['Profile', 'Account', 'Dashboard', 'Logout'];

export default function Header() {
  
  const navigate = useNavigate()

  return (
    <AppBar position="sticky" 
      style={{
        backgroundColor: "#E9E9E9",
        paddingBlock: "2vh",
        boxDecorationBreak: "revert"
      }}>
      <Container maxWidth="fixed" 
        style={{
          paddingInline: "10vh",
          display: "block"
        }} >
        <Toolbar disableGutters sx={{display: "flex"}}>
          <Stack direction="row" marginRight={7}>
            <Button disabled>
              <img className="imgLogo" src={PizzaLogo} alt="Pizza Runner"/>
            </Button>
            <Button>
              <Box sx={{ 
                  width: 100,
                  m: 1,
                  textAlign: 'left', 
                  letterSpacing: 6
                  }}> 
                <h3 style={{fontWeight: "800"}}>
                  PIZZA RUNNER
                </h3>
              </Box>
            </Button>
          </Stack>
          <Stack display="flex" direction="row" spacing={7}>
            <Button  onClick={() => navigate('')}>
              <Box sx={{ letterSpacing: 6, m: 1 }}> <h3>Home</h3> </Box>
            </Button>
            <Button>
              <Box sx={{ letterSpacing: 6, m: 1 }}> <h3>Menu</h3> </Box>
            </Button>
            <Button >
              <Box sx={{ letterSpacing: 6, m: 1 }}> <h3>About</h3> </Box>
            </Button>
          </Stack>
          <Container maxWidth="fixed" 
            style={{
              display: "flex", 
              flexDirection: "row-reverse", 
              // backgroundColor: "red"
            }}>
            <Avatar onClick={() => navigate('login')}
                sx={{ 
                // bgcolor: "grey", 
                paddingBlock: 2, 
                paddingX: 2, 
                flexDirection: "row-reverse"
              }}>
                <AccountCircleIcon sx={{width: 50, height: 50}}/>
            </Avatar>
          </Container>
        </Toolbar>
      </Container>
    </AppBar>
  );
}