import React from 'react'
import Button_LandingOrder from "../../ui/Button_LandingOrder";
import { Container, Box, } from "@mui/material";
import Grid from "@mui/material/Unstable_Grid2";

import THead from '/resources/images/text-image/THead.png'
import MeatLoverText from '/resources/images/MeatLover-Text.png'
import MeatLover from '/resources/images/MeatLover.png'

export default function LBody() {
  return (
    <div className='Lbody-container'>
      <Container maxWidth="fixed"
        style={{
          // backgroundColor: "red",
          paddingInline: "15vh",
          display: "flex"
        }}>

        <Grid container mt={10} display={"flex"} direction={"row"} spacing={10}>
          <Grid xs={6} pr={5}>
            <Box >
              <img src={THead} />
            </Box>
            <Box className="textF" mt={2} pl={2}>
              <p>
                Feel the best and awesome taste with Pizza Runner. <br />
                There has been various kind of Toppings you can eat <br />
                and feel the wonder taste of this awesome Pizza. <br />
                </p>
            </Box>
            <Box display={"flex"}
                pl={17}
                mt={12}
            >
              <Button_LandingOrder />
            </Box>
          </Grid>
          <Grid xs={6}>
            <Box display={"flex"}
                justifyContent={"center"}
                alignItems={"center"}
            >
              <img src={MeatLoverText} />
            </Box>
            <Box mt={2}>
              <img style={{width:850}} src={MeatLover} />
            </Box>
          </Grid>
        </Grid>
      </Container>
    </div>

  );
}