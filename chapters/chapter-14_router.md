# Chapter 14 – React Router DOM ⭐

## 1. SPA (Single Page Application)

- SPA = Single Page Application

**Matlab:**

1. Sirf ek HTML file (index.html)
1. URL change hota hai
1. Content change hota hai
1. Browser reload nahi hota

**Examples:**

1. Gmail
1. Facebook
1. Instagram
1. YouTube Studio

## Traditional Website vs SPA

| Traditional Website     | React SPA           |
| ----------------------- | ------------------- |
| Page Reload             | No Reload           |
| Slow                    | Fast                |
| HTML alag-alag          | Single `index.html` |
| Better for simple sites | Better for web apps |

## 2. React Router Install

`npm install react-router-dom`

- Ye package install hone ke baad routing use kar sakte hain.

## 3. Folder Structure

<code><pre>
src
│
├── pages
│   ├── Home.jsx
│   ├── About.jsx
│   ├── Contact.jsx
│
├── App.jsx
└── main.jsx
</pre></code>

## 4. Home Page

`pages/Home.jsx`

<code><pre>
function Home() {
  return &lt;h1&gt; 🏠 Home Page &lt;/h1&gt;;
}

export default Home;
</pre></code>

## 5. About Page

`pages/About.jsx`

<code><pre>
function About() {
  return &lt;h1&gt; ℹ️ About Page &lt;/h1&gt;;
}

export default About;
</pre></code>

## 6. Contact Page

`pages/Contact.jsx`

<code><pre>
function Contact() {
  return &lt;h1&gt; 📞 Contact Page &lt;/h1&gt;;
}

export default Contact;
</pre></code>

## 7. App.jsx

<code><pre>
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Home from "./pages/Home";
import About from "./pages/About";
import Contact from "./pages/Contact";

function App() {
  return (
    &lt;BrowserRouter&gt;
      &lt;Routes&gt;
        &lt;Route path="/" element={<Home />} /&gt;
        &lt;Route path="/about" element={<About />} /&gt;
        &lt;Route path="/contact" element={<Contact />} /&gt;
      &lt;/Routes&gt;
    &lt;/BrowserRouter&gt;
  );
}

export default App;
</pre></code>

## 8. Route Samjho

<code><pre>
&lt;Route
  path="/about"
  element={&lt;About /&gt;}
/&gt;
</pre></code>

**Meaning**

<code><pre>
User

↓

/about

↓

About Component
</pre></code>

## 9. Link Component

- Navigation kaise kare?

**❌ Wrong**

`<a href="/about">`

**✅ Correct**

<code><pre>
import { Link } from "react-router-dom";

&lt;Link to="/about"&gt;
  About
&lt;/Link&gt;
</pre></code>

## Complete Navbar

<code><pre>
import { Link } from "react-router-dom";

function Navbar() {

  return (

    <>
      <Link to="/">Home</Link>

      {" | "}

      <Link to="/about">About</Link>

      {" | "}

      <Link to="/contact">Contact</Link>
    </>

  );

}

export default Navbar;
</pre></code>

**Output**

`Home | About | Contact`

## 10. Navbar Use

<code><pre>
&lt;BrowserRouter&gt;
  &lt;Navbar /&gt;
  &lt;Routes&gt;
    &lt;Route path="/" element={<Home />} /&gt;
    &lt;Route path="/about" element={<About />} /&gt;
    &lt;Route path="/contact" element={<Contact />} /&gt;
  &lt;/Routes&gt;
&lt;/BrowserRouter&gt;
</pre></code>

## 11. useNavigate()

- Kabhi button click par page change karna hota hai.

**Example:**

Login

↓

Dashboard

<code><pre>
import { useNavigate } from "react-router-dom";

function Login() {

  const navigate = useNavigate();

  function handleLogin() {

    navigate("/dashboard");

  }

  return (
    &lt;button onClick={handleLogin}&gt;
      Login
    &lt;/button&gt;
  );

}

export default Login;
</pre></code>

**Flow**

<code><pre>
Click

↓

navigate()

↓

Dashboard
</pre></code>


## 12. 404 Page

``pages/NotFound.jsx``

<code><pre>
function NotFound() {
  return &lt;h1&gt;404 - Page Not Found&lt;/h1&gt;;
}

export default NotFound;
</pre></code>

**Route**

<code><pre>
&lt;Route
  path="*"
  element={<NotFound />}
/&gt;
</pre></code>

**Flow**

<code><pre>
Wrong URL

↓

404 Component
</pre></code>

## Interview Questions

**Q1. React Router kisliye use hota hai?**
- React me page navigation ke liye.

**Q2. SPA ka full form?**
- Single Page Application

**Q3. `<a>` aur `<Link>` me difference?**

| `<a>`       | `<Link>`     |
| ----------- | ------------ |
| Page Reload | No Reload    |
| HTML        | React Router |

**Q4. `useNavigate()` kisliye use hota hai?**
- Programmatically page change karne ke liye.

**Q5. 404 page ka route?**

`<Route path="*" element={<NotFound />} />`