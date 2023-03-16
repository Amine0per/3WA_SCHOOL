
import React , {useState} from 'react';
import ReactDOM from 'react-dom/client';


import "./App.css" 

function Xxxx() {
  const [tasks, setTasks] = useState([]);
  const [inprogress, setinprogress] = useState([]);
  const [completed, setcompleted] = useState([]);
  const addTask = (newTask) => {
    setTasks([...tasks, newTask]);
  }
  var newdrag = '' ;

  const handleDragStart = (event , source) => {
    if (source === 'taskList') {
      
    newdrag = event.target.innerText;
    
  }  else  alert('');
  }
  const handleDragOver = (e) => {
    e.preventDefault();
  };

  const handleDrop = (e, destination) => {
    e.preventDefault();
    if (destination === 'div1') {
      setTasks([...tasks, newdrag]);
    

    } else if (destination === 'div2') {

      setinprogress([...inprogress, newdrag]);
       handleRemoveItemFromTasks(e.target)

    } else if (destination === 'div3') {
      setcompleted([...completed, newdrag]);
      handleRemoveItemFromInprogress(e.target)
    }
  };
  
  const handleRemoveItemFromTasks = (index) => {
    const newList = [...tasks];
    newList.splice(index, 1);
    setTasks(newList);
  };

  const handleRemoveItemFromInprogress = (index) => {
    const newList = [...inprogress];
    newList.splice(index, 1);
    setinprogress(newList);
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

        {tasks.map((task , index) => (
          <p key={index} style = {{border :"2px solid black" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" ,  } } draggable
          onDragStart={(event) => handleDragStart(event) } 
          >{task}</p>
      
        ))}
   
    </div>
          </div>
      <div id="InProgressBox" className="droppable"
        onDragOver={(event) => handleDragOver(event)}
        onDrop={(event) => handleDrop(event, 'div2')}>
        <h2>In Progress</h2>
        

        {inprogress.map((newdrag , index) => (
          <p key={index} style = {{border :"2px solid pink" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" , backgroundColor: 'lightgray' } } draggable
          onDragStart={(event) => handleDragStart(event )} >
            {newdrag}</p> ))}


          </div>
       
      <div id="CompletedBox"  className="droppable"
        onDragOver={(event) => handleDragOver(event)}
        onDrop={(event) => handleDrop(event, 'div3')}>
      <h2>Completed</h2>
      {completed.map((newdrag , index) => (
          <p key={index} style = {{border :"2px solid black" , padding : "10px" , textAlign: 'center' , fontSize: '20px' , margin: "50px" , backgroundColor: 'gray' } } draggable
          onDragStart={(event) => handleDragStart(event , '')}>
            {newdrag}</p> ))}
      </div>
    </div>
    </div>
 
  </>

  )
};

const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<Xxxx/>);