import * as React from 'react';
import Button from '@mui/material/Button';
import Stack from '@mui/material/Stack';
import { useNavigate } from 'react-router-dom';

export default function Button_LandingOrder() {

  const navigate = useNavigate() 

  return (
    <Stack>
      <Button onClick={() => navigate('ordering')}
              variant="contained"
              size='large'
              style={{
                backgroundColor: "#404040",
                fontSize: 28,
                borderRadius: 20
              }}>
        ORDER NOW
      </Button>
    </Stack>
  );
}