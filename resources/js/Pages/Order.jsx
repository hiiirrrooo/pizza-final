import * as React from 'react';
import { useNavigate } from "react-router-dom"
import Box from '@mui/material/Box';
import InputLabel from '@mui/material/InputLabel';
import MenuItem from '@mui/material/MenuItem';
import FormControl from '@mui/material/FormControl';
import Select from '@mui/material/Select';
import TextField from '@mui/material/TextField';
import Button from '@mui/material/Button';

const Index = () => {
    const navigate = useNavigate()
    const backButton = () => {
        navigate('/')
    }

    const [PName, setPName] = React.useState('');
    const [pizza_id, setPizza_id] = React.useState('');
    const [inputs, setInputs] = React.useState({
      custname: "",
      custaddr: "",
      exclusion: "",
      extras: ""
    });

    const handleChange = (event) => {
      setPName(event.target.value);
      setPizza_id(event.target.value);
    };
  
    const handleChanges = (e) => {
      setInputs((prevState) => ({
        ...prevState,
        [e.target.name] : e.target.value
        
      }))
    }

    return (
      <Box spacing={2} direction="column">
        <form action="/submit" method="POST">

        <TextField 
          name="custname" 
          id="custname" 
          label="Customer Name" 
          variant="outlined" 
          value={inputs.custname}
          onChange={handleChanges} />

        <TextField 
          name="custaddr" 
          id="custaddr" 
          label="Customer Address" 
          variant="outlined" 
          value={inputs.custaddr}
          onChange={handleChanges} />

        <FormControl fullWidth>
        <InputLabel 
        name="pizza_id" 
        id="pizza-select-input" 
        value={pizza_id}
         >Pizza Name
        </InputLabel>
        <Select
            name="pizza_id"
            labelId="pizza-select-input"
            id="pizza-select"
            value={PName}
            label="PizzaName"
            onChange={handleChange}
          >
            <MenuItem value="1">Meat Lover</MenuItem>
            <MenuItem value="2">Vegetarian</MenuItem>
            <MenuItem value="3">Beef-Beef-Beef</MenuItem>
          </Select>
        </FormControl>

        <TextField 
          name="exclusion" 
          id="exclusion" 
          label="Topping Exclusion" 
          variant="outlined" 
          value={inputs.exclusion}
          onChange={handleChanges} />

        <TextField 
          name="extras" 
          id="extras" 
          label="Topping Extras" 
          variant="outlined" 
          value={inputs.extras}
          onChange={handleChanges} />
          
        <Button type="submit">Submit</Button>
        </form>
      </Box>
    );
  }

export default Index