// import './SampStyle.css'
// import React, { useState } from 'react';
// import Box from '@mui/material/Box';
// import Select from '@mui/material/Select';
// import MenuItem from '@mui/material/MenuItem';

// const SampTExt = () => {
//   const [selectedValue, setSelectedValue] = useState('');
//   const [image, setImage] = useState('/src/images/PIZZAS.png');

//   const handleChange = (event) => {
//     const selectedOption = event.target.value;
//     setSelectedValue(selectedOption);

//       if (selectedOption === '1') {
//         setImage('/src/images/MLOVER.png');
//       } else if (selectedOption === '2') {
//         setImage('/src/images/CHICKEN_TA.png');
//       } else if (selectedOption === '3') {
//         setImage('/src/images/BEEFFIE.png'); 
//       } else {
//         // Handle other cases or set a default image
//         setImage('/src/images/PIZZAS.png');
//       }
      
//   };

//   return (
//     <div>
//       <Box container
//           sx={{ 
//             display: 'flex', 
//             justifyContent: "flex-end", 
//             paddingX: "20ch",
//             // backgroundColor: "blue"
//           }}>
      
//         <Select value={selectedValue} onChange={handleChange} 
//           sx={{
//             backgroundColor: "whitesmoke",
//             marginY: 50
//           }}>
//             <MenuItem value="">Select an Option</MenuItem>
//             <MenuItem value="1">MLOVER</MenuItem>
//             <MenuItem value="2">CHICKEN'TA</MenuItem>
//             <MenuItem value="3">BEEFFIE</MenuItem>
//         </Select>
        
//             <img style={{paddingLeft: "20vh", marginRight: 300,
//             width: "50vh", height: "50vh",
//             marginTop: 100
//             }} src={image} alt="Image" />
//       </Box>
//     </div>
//   );
// };

// export default SampTExt;
import React, { useState, useEffect } from 'react';
import { FormControl, InputLabel, MenuItem, Select, Typography, Fade } from '@mui/material';

const wordLists = {
  '1': [
    <ul className='Toppings'>
        <p>TOPPINGS</p>
        <p>1. Bacon</p>
        <p>2. BBQ Sauce</p>
        <p>3. Beef</p>
        <p>4. Cheese</p>
        <p>5. Chicken</p>
        <p>6. Mushroom</p>
        <p>8. Pepperoni</p>
        <p>10. Salami</p>
      </ul>
  ],
  '2': [
    <ul className='Toppings'>
        <p>TOPPINGS</p>
        <p>1. Bacon</p>
        <p>2. BBQ Sauce</p>
        <p>3. Beef</p>
        <p>4. Cheese</p>
        <p>5. Chicken</p>
        <p>10. Salami</p>
      </ul>
  ],
  '3': [
    <ul className='Toppings'>
        <p>TOPPINGS</p>
        <p>1. Bacon</p>
        <p>4. Cheese</p>
        <p>5. Chicken</p>
        <p>6. Mushroom</p>
        <p>8. Pepperoni</p>
        <p>10. Salami</p>
      </ul>
  ],
};

const SampTExt = () => {
  const [selectedOption, setSelectedOption] = useState('');
  const [wordList, setWordList] = useState([]);
  const [displayedWords, setDisplayedWords] = useState([]);

  useEffect(() => {
    setDisplayedWords([]);
    if (wordList.length > 0) {
      let i = 0;
      const timer = setInterval(() => {
        setDisplayedWords((prevWords) => [...prevWords, wordList[i]]);
        i++;
        if (i >= wordList.length) {
          clearInterval(timer);
        }
      }, 150);
    }
  }, [wordList]);

  const handleChange = (event) => {
    const option = event.target.value;
    setSelectedOption(option);
    setWordList(wordLists[option]);
  };

  return (
    <div>
      <FormControl>
        <InputLabel>Select an option</InputLabel>
        <Select value={selectedOption} onChange={handleChange}>
          <MenuItem value="1">MEAT LOVER</MenuItem>
          <MenuItem value="2">VEGETARIAN</MenuItem>
          <MenuItem value="3">BEEF-BEEF-BEEF</MenuItem>
        </Select>
      </FormControl>

      <Typography variant="h6">Word List:</Typography>
      <Fade in={wordList.length > 0}>
        <ul>
          {displayedWords.map((word) => (
            <li key={word}>{word}</li>
          ))}
        </ul>
      </Fade>
    </div>
  );
};

export default SampTExt;
