import React , {useState} from 'react';
import ReactDOM from 'react-dom/client';
 
function Xxxx() {

    const [items, setItems] = useState([
        { id: 1, content: 'Item 1' },
        { id: 2, content: 'Item 2' },
        { id: 3, content: 'Item 3' },
      ]);
    
      const handleDragStart = (event, index) => {
        event.dataTransfer.setData('index', index);
      };
    
      const handleDragOver = (event, index) => {
        event.preventDefault();
      };
    
      const handleDrop = (event, index) => {
        const draggedIndex = event.dataTransfer.getData('index');
        const newItems = [...items];
        const [draggedItem] = newItems.splice(draggedIndex, 1);
        newItems.splice(index, 0, draggedItem);
        setItems(newItems);
      };


  
  return (
  <>
  

  <div>
      {items.map((item, index) => (
        <div
          key={item.id}
          draggable
          onDragStart={(event) => handleDragStart(event, index)}
          onDragOver={(event) => handleDragOver(event, index)}
          onDrop={(event) => handleDrop(event, index)}
        >
          {item.content}
        </div>
      ))}
    </div>





  
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);


import React , {useState} from 'react';
import ReactDOM from 'react-dom/client';
import "./App.css" 






function Xxxx() {
    const [InputValue, setInputValue] = useState("");
    const [myList, setMyList] = useState("");
    const HandleSubmit = (e) => { 
        e.preventDefault();
        const newItem = InputValue;
        const updatedList = [...myList, newItem];
        setMyList(updatedList);
        setInputValue("");
         }

         function handleInputChange(e) {
            setInputValue(e.target.value);
            
          }
      
  return (
  <>
  <div id="container">
       <div id="NewTaskBox">
      
        <label>Creer une nouvelle tache</label>
          <input type="text"
        value={inputValue}
        onChange={handleInputChange}/>
         <button onClick={handleAddTask}>Add Task</button>
          
          

  </div>
   <div id="ToDoList">
      <div id="ToDoBox">
        <h2 >Items</h2>
        <ul>
          {myList.map((item) => (
            <li >{item}</li>
          ))}
        </ul>
          </div>
        
      
      <div id="InProgressBox">
        <h2>In Progress</h2>
        sdsdsdsdsd<br></br>
        sdsdsdsd
          </div>
       
      <div id="CompletedBox">
        <h2>Completed</h2>
        sdsdsdsd<br></br>
        sdsds
      </div>
    </div>
    </div>
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);



import React , {useState} from 'react';
import { useDrag, useDrop } from "react-dnd";
import ReactDOM from 'react-dom/client';
import "./App.css" 


import {useState} from 'react';
import ReactDOM from 'react-dom/client';
import './App.css';
 
function Xxxx() {

  const [Nom, setNom] = useState("");
  const [Email, setEmail] = useState("");
  const [MotDePasse, setMotDePasse] = useState("");
  const [DateDeNaissance, setDateDeNaissance] = useState("");
  const [NombreDenfants, setNombreDenfants] = useState("");
  const [Choix, setChoix]= useState("");
  const [Textarea, setTextarea]= useState("");
  const [Sexe, setSexe]= useState("");
  
  const ChoixSexe = (event) => {
    setSexe(event.target.value);
  }
 
  const HandleSubmit = (e) => { 
    e.preventDefault();
    alert(`les informations que vous avez entres sont : ${Nom} , ${Email} , ${MotDePasse} , ${DateDeNaissance} , ${NombreDenfants} , ${Textarea} , ${Sexe} , ${Choix} `); }

   
  return (
  <>
  <p>lorem10</p>
  <form onSubmit={HandleSubmit}>
      <label for="Nom">Nom</label>
      <input type="text" id="Nom" name="Nom" value={Nom} onChange={(e)=> setNom(e.target.value)} ></input>
      <br/><br/>
      <label for="Email">Email</label>
      <input type="email" id="Email" name="Email" value={Email} onChange={(e)=> setEmail(e.target.value)} ></input>
      <br/><br/>
      <label for="MotDePasse">Mot De Passe</label>
      <input type="text" id="MotDePasse" name="MotDePasse" value={MotDePasse} onChange={(e)=> setMotDePasse(e.target.value)} ></input>
      <br/><br/>
      <label for="DateDeNaissance">Date De Naissance</label>
      <input type="date" id="DateDeNaissance" name="DateDeNaissance" value={DateDeNaissance} onChange={(e)=> setDateDeNaissance(e.target.value)} ></input>
      <br/><br/>
      <label for="NombreDenfants">Nombre d'enfants</label>
      <input type="number" id="NombreDenfants" name="NombreDenfants" value={NombreDenfants} onChange={(e)=> setNombreDenfants(e.target.value)} ></input>
      <br/><br/>
      Description
      <textarea value={Textarea} onChange={(e)=> setTextarea(e.target.value)}  />
      <br/><br/>
      sexe <br/>

      
      <label for="Masculin">Masculin</label>
      <input type="radio" id="Masculin" name="Sexe" value="Masculin" checked={Sexe === 'Masculin'} onChange={ChoixSexe} ></input>

      <label for="feminin">feminin</label>
      <input type="radio" id="Feminin" name="Sexe" value="Feminin" checked={Sexe === 'Feminin'} onChange={ChoixSexe} ></input>

      <label for="Autre">Autre</label>
      <input type="radio" id="Autre" name="Sexe"  value="Autre" checked={Sexe === 'Autre'} onChange={ChoixSexe} ></input>
      

      <br/><br/>
      Comment vous nous avez connu?
      <select value={Choix} onChange={(e)=> setChoix(e.target.value)} >
        <option value="Instagram">Instagram</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Autre">Autre</option>
      </select>
      <br/><br/>
     
      <input type="submit" value="Enregistrer"/>
      <button type="reset" >Annuler</button>
      
  </form>
  
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);



function Xxxx() {
  const [tasks, setTasks] = useState([]);

  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  }
  return (
  <>
  <div id="container">
       <div id="NewTaskBox">
      
       <form onSubmit={(event) => {
          event.preventDefault();
          const newTask = event.target.task.value;
          addTask(newTask);
          event.target.task.value = '';
        }}>
        <input type="text" name="task" placeholder="Add task" />
        <button type="submit">Add</button>
      </form>

          

  </div>
   <div id="ToDoList">
      <div id="ToDoBox">
        <h2 >Items</h2>
        <div>
     
      <ul>
        {tasks.map((task, index) => (
          <li key={index} >{task}</li>
        ))}
      </ul>
    </div>
          </div>
        
      
      <div id="InProgressBox">
        <h2>In Progress</h2>
        

          </div>
       
      <div id="CompletedBox">
      <h2>Completed</h2>

      </div>
    </div>
    </div>
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);


import React , {useState} from 'react';
import ReactDOM from 'react-dom/client';


import "./App.css" 






function Xxxx() {
  const [tasks, setTasks] = useState([]);
  const [inprogress, setinprogress] = useState([]);
  const [completed, setcompleted] = useState([]);

  const [draggedText, setDraggedText] = useState('');

  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  }

  var newdrag = ''

  const handleDragStart = (event) => {
    newdrag = event.target.innerText;
    setDraggedText(newdrag);
  };

  const handleDragOver = (e) => {
    e.preventDefault();
  };

  const handleDrop = (e, destination) => {
    e.preventDefault();
    if (destination === 'div1') {
      setTasks([...tasks, draggedText]);
    } else if (destination === 'div2') {
      setinprogress([...inprogress, draggedText]);
    } else if (destination === 'div3') {
      setcompleted([...completed, draggedText]);
    }
    setDraggedText('');
    

    
  };

  return (
  <>
  <div id="container">
       <div id="NewTaskBox">
      
       <form onSubmit={(event) => {
          event.preventDefault();

          const newTask = event.target.task.value;
          if(newTask) {
          addTask(newTask);
          event.target.task.value = '';
          }
          else { alert("Entrez une tache") }
        }}>
        <input type="text"  placeholder="Add task" name='task'/>
        <button type="submit">Add</button>
      </form>

          

  </div>
   <div id="ToDoList">
      <div id="ToDoBox" className="droppable"
        onDragOver={(event) => handleDragOver(event)}
        onDrop={(event) => handleDrop(event, 'div1')}>
        <h2 >Items</h2>
        <div >
        
      
        {tasks.map((task ) => (
          <p style = {{border :"2px solid black" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" , backgroundColor: 'lightgray' } } draggable
          onDragStart={(event) => handleDragStart(event)}
          >{task}</p>
      
        ))}
       

      
    </div>
          </div>
        
      
      <div id="InProgressBox" className="droppable"
        onDragOver={(event) => handleDragOver(event)}
        onDrop={(event) => handleDrop(event, 'div2')}>
        <h2>In Progress</h2>
        

        {inprogress.map((draggedText) => (
          <p style = {{border :"2px solid black" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" , backgroundColor: 'lightgray' } } draggable>
            {draggedText}</p> ))}


          </div>
       
      <div id="CompletedBox"  className="droppable"
        onDragOver={(event) => handleDragOver(event)}
        onDrop={(event) => handleDrop(event, 'div3')}>
      <h2>Completed</h2>
      {completed.map((draggedText) => (
          <p style = {{border :"2px solid black" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" , backgroundColor: 'lightgray' } } draggable>
            {draggedText}</p> ))}
      </div>
    </div>
    </div>
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);