import { useState } from 'react';
import './App.css';
import AboutText from './component/UserInformation/AboutText';
import Name from './component/UserInformation/Name';
import Section from './component/UserInformation/Section';

function App() {
  const [UserInformation, setUserInformation] = useState( {
    firstName: "Rafael",
    middleName: "Astronomo",
    lastName: "Ramos",
    section: "BSCS-3A",
    AboutText: "Computer Science Student from Dr. Yanga College"
  } );

    function updateName() {
    UserInformation.firstName="Raf";
    setUserInformation({ ...UserInformation });
    return UserInformation;
    }
    const [MoveMoon, setMoveMoon] = useState(false)

  return (
    <div className="App">
      <Name 
      firstName={UserInformation.firstName} 
      middleName={UserInformation.middleName} 
      lastName={UserInformation.lastName}
      section={UserInformation.section}/>
      <Section/>
      <AboutText
      AboutText={UserInformation.AboutText}/>
      <button type='button' onClick={updateName}>Update Name</button>
      <div className="moon"></div>
      <button onclick={MoveMoon}>Move Me</button>
      </div>

  );
}


export default App;
