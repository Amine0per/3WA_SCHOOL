import React, {useState, useRef} from "react"

export default function Todolist(){
    const [todoInputText, setTodoInputText] = useState("")
    const [todos, setTodos] = useState([
        {
            todo: "Making a video!",
            complete: true,
            isDragging: false  
        },
        {
            todo: "Making a website!",
            complete: false,
            isDragging: false  
        },
        {
            todo: "Making another website!",
            complete: false,
            isDragging: false  
        }
    ])

    function handleAddTodo(){
        if(todoInputText.length > 0){
            setTodos([...todos, { todo:todoInputText, complete: false,isDragging: false    }])
        }
    }

    function handleTodoClicks (e, index){
        switch(e.detail){
            case 1:
                // complete - > true
                const newArr = []
                todos.forEach((item, i)=>{
                    if(i === index){
                        newArr.push({
                            todo: item.todo,
                            complete: !item.complete
                        })
                    }else{
                        newArr.push(item)
                    }
                })

                setTodos(newArr)
                break;
            case 2:
                setTodos( todos.filter((item,iy)=> iy !== index) )
                break;

            default:
                break;
        }
    }

    let todoItemDrag = useRef()
    let todoItemDragOver = useRef()    

    function D_Start(e,index){
        todoItemDrag.current = index;
    }
    function D_Enter(e,index){
        todoItemDragOver.current = index

        const cpArr = [...todos]

        let finalArr = []

        cpArr.forEach(item=>{
            finalArr.push({
                todo: item.todo,
                complete: item.complete,
                isDragging: false
            })
        })

        finalArr[index].isDragging = true;

        setTodos(finalArr)


    }
    function D_End(e,index){
        const arr1 = [...todos]

        const todo_item_main = arr1[todoItemDrag.current]
        arr1.splice(todoItemDrag.current, 1)
        arr1.splice(todoItemDragOver.current, 0, todo_item_main)

        todoItemDrag.current = null;
        todoItemDragOver.current = null;

        let f_arr = []

        arr1.forEach(item=>{
            f_arr.push({
                todo: item.todo,
                complete: item.complete,
                isDragging: false
            })
        })

        setTodos(f_arr)
    }

    return(
        <div className="todo-container">
            <input onChange={e=> setTodoInputText(e.target.value)} className="input-todo-text" type="text" placeholder="enter a task" />
            <button onClick={()=> handleAddTodo()} className="add-todo-button">add task</button>
            <div className="display-todo-container">
                {todos.map((todo, index)=>(
                    <React.Fragment>

                    <h3 draggable droppable onDragStart={e=> D_Start(e,index)} onDragEnter={e=> D_Enter(e,index)} onDragEnd={e=> D_End(e,index)} style={{textDecoration: todo.complete ? "line-through" : "none", background: todo.complete ? "red" : null}} onClick={e=> handleTodoClicks(e, index)} className="todo-item-text">{todo.todo}</h3>
                    {todo.isDragging ?  <div className="drag-indicator"></div> : null}
                   
                    </React.Fragment>
                    
                ))}
            </div>
        </div>
    )
}