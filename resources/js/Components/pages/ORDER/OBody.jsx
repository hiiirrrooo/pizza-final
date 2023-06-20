import React from 'react'
import { FormatAlignJustifyTwoTone } from "@mui/icons-material";
import OrderForm from "../../ui/OrderForm";
import OHeader from "./OHeader"
import { Container, Box, rgbToHex, } from "@mui/material";
import Grid from "@mui/material/Unstable_Grid2";

export default function OBody() {
  
  return (
    <div className='Obody-container'>
        <OHeader/> 
      <Grid maxWidth="fixed" 
        style={{
          marginBlock: "18vh",
          display: "flex",
          flexDirection: "row",
          justifyContent: "center",
        }}>
            <OrderForm />
      </Grid>
    </div>

  );
}