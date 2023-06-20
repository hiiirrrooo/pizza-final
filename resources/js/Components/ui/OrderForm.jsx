import React, { useState, useEffect } from 'react';
import Box from '@mui/material/Box';
import TextField from '@mui/material/TextField';
import InputLabel from '@mui/material/InputLabel';
import MenuItem from '@mui/material/MenuItem';
import FormControl from '@mui/material/FormControl';
import Select from '@mui/material/Select';
import Button_OrderForm from './Button_OrderForm';
import Fade from '@mui/material/Fade';
import  Stack from '@mui/material/Stack';
import { inputBaseClasses } from '@mui/material';

const OrderForm = () => {
  const [selectedValue, setSelectedValue] = useState('');

  const [image, setImage] = useState('/resources/images/PIZZAS.png');
  const [grown, setGrown] = useState(false);

  const [wordList, setWordList] = useState([]);

  const [PName, setPName] = React.useState('');
  const [pizza_id, setPizza_id] = React.useState('');
  const [inputs, setInputs] = React.useState({
    custname: "",
    custaddr: "",
    exclusion: "",
    extras: ""
  });

  useEffect(() => {
    if (selectedValue === '1') {
      setWordList([
        'TOPPINGS',
          '1. Bacon', '2. BBQ Sauce', '3. Beef', 
          '4. Cheese', '5. Chicken', '6. Mushroom', 
          '8. Pepperoni', '10. Salami'
      ]);
    } else if (selectedValue === '2') {
      setWordList([
        'TOPPINGS',
          '4. Cheese', '6. Mushroom', '7. Onion',
          '9. Pep', '9. Peppers', '11. Tomatoes', '12. Tomato Sauce'
      ]);
    } else if (selectedValue === '3') {
      setWordList([
        'TOPPINGS',
          '3. Beef', '7. Onion', '8. Pepperoni',
          '9. Peppers', '11. Tomatoes', '12. Tomato Sauce'
      ]);
    } else {
      setWordList([]);
    }
  }, [selectedValue]);

  const handleChange = (event) => {
    const selectedOption = event.target.value;
    setSelectedValue(selectedOption);
    setPName(event.target.value);
    setPizza_id(event.target.value);
    setGrown(true);

    setTimeout(() => {
    if (selectedOption === '1') {
      setImage('/resources/images/MLOVER.png');
    } else if (selectedOption === '2') {
      setImage('/resources/images/VEGETARIAN.png');
    } else if (selectedOption === '3') {
      setImage('/resources/images/BEEFx3.png'); 
    } else {
      // Handle other cases or set a default image
      setImage('/resources/images/PIZZAS.png');
    }
      setGrown(false);
    }, 125)
  };

  const handleInputChanges = (e) => {
    setInputs((prevState) => ({
      ...prevState,
      [e.target.name] : e.target.value
      
    }))
  }

  const test = (inputs) => {
    console.log(inputs);
  }

  return (
    <Stack display={"flex"} direction={"row"}>
      <form action="/submit" method="POST">
      <Box bgcolor={"whitesmoke"}
        maxWidth={"30vh"}
        paddingY={2}
        paddingX={2}
        mt={2}
        mb={15}
        mx={10}
        display={"grid"}
        justifyContent={"center"}
        autoComplete="off"
        noValidate
        sx={{
          '& > :not(style)': { m: 1, width: '30ch' },
          borderRadius: "1vmin"
        }}>
          <TextField 
            name="custname" 
            id="custname" 
            required 
            label="Full Name" 
            variant="outlined"
            value={inputs.custname}
            onChange={handleInputChanges} />

          <TextField 
            name="custaddr" 
            id="custaddr" 
            required 
            label="Address" 
            variant="outlined"
            value={inputs.custaddr}
            onChange={handleInputChanges} />
          
          <Box sx={{ minWidth: 120, py: 1 }}>
            <FormControl fullWidth>
              <InputLabel 
                name="pizza_id" 
                id="pizza-select-input"
                value={pizza_id}
                >Select Pizza
                  </InputLabel>
              <Select
                name="pizza_id"
                labelId="pizza-select-input"
                id="pizza-select"
                value={PName}
                label="Select Pizza"
                onChange={handleChange}
              >
                <MenuItem value=""><em>None</em></MenuItem>
                <MenuItem value="1">Meat Lover</MenuItem>
                <MenuItem value="2">Vegetarian</MenuItem>
                <MenuItem value="3">Beef-Beef-Beef</MenuItem>
              </Select>
            </FormControl>
          </Box>
        
          <TextField 
            name="exclusion"
            id="exclusion"
            required 
            label="Toppings Exclusiions" 
            variant="outlined"
            value={inputs.exclusion}
            onChange={handleInputChanges}  />

          <TextField 
            name="extras"
            id="extras"
            required 
            label="Toppings Extras" 
            variant="outlined" 
            value={inputs.extras}
            onChange={handleInputChanges} />

        <Button_OrderForm />
        </Box>
      </form>
      <Box
        width={250}
        display={"grid"}
        // bgcolor={"green"}
        mt={3}
        mb={15}
        ml={10}
        mr={5}
      >
        <Fade in={wordList.length > 0}>
          <div className='Toppings'>
          {wordList.map((word, index) => (
            <p key={index}>{word}</p>
          ))}
        </div>
        </Fade>
        
      </Box>
      <Box pl={5}
          // bgcolor={"red"}
          display={"flex"}
          justifyContent={"flex-end"}
      >
        <div className={`image-container ${grown ? 'grow' : ''}`}>
          <img style={{
            width: 800,
            height: 600
          }} id="FoodImage" src={image} alt="Image"/>
        </div> 
      </Box>
    </Stack>
  );
};

export default OrderForm;