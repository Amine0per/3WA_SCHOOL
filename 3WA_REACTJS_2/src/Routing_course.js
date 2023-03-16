import { BrowserRouter, Routes, Route} from "react-router-dom";
import ReactDOM from 'react-dom/client';
import Home from "./pages/Home";
import Blogs from "./pages/Blogs"
import Contact from "./pages/Contact"
import Layout from "./pages/Layout";

export default function App(){
    return (
        <BrowserRouter>
        <Routes>
            <Route path="/" element = {<Layout/>} >
                <Route index element = {<Home/>} />
                <Route path="blogs" element= {<Blogs/>} />
                <Route path="contact" element= {<Contact/>} />
            </Route>
        </Routes>
        </BrowserRouter>
    )
}
const ttt = ReactDOM.createRoot(document.getElementById('root'));
ttt.render(<App/>);