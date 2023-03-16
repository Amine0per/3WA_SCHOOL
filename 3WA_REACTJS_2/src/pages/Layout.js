import { Outlet, Link } from "react-router-dom";

const Layout = () =>{
    return (
        <>
        <nav>
            <lu>
                <li> <Link to="/">Home</Link> </li>
                <li> <Link to="/blogs">Blogs</Link> </li>
                <li> <Link to="/contact">Contact</Link> </li>
            </lu>
        </nav>
        <Outlet/>
        </>
    )
}
export default Layout;