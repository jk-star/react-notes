# Chapter 15 – Nested Routes & Layouts ⭐

## 1. Problem Samjho
- Suppose tumhari website me ye pages hain:
<code><per>
Home

About

Contact
</pre></code>

- Har page par same Navbar aur Footer hai.
- ❌ Agar har page me ye likho:
<code><pre>
&lt;&gt;
  &lt;Navbar /&gt;
  &lt;Home /&gt;
  &lt;Footer /&gt;
&lt;/&gt;
</pre></code>

- Aur About me bhi:

<code><pre>
&lt;&gt;
  &lt;Navbar /&gt;
  &lt;Home /&gt;
  &lt;Footer /&gt;
&lt;/&gt;
</pre></code>

- Aur Contact me bhi...
- Bahut duplicate code.

## Solution

- Ek **Layout Component** banao.
<code><pre>
Layout
↓
Navbar
↓
Page Content
↓
Footer
</pre></code>

- Sirf beech wala content change hoga.

## 2. Layout Component
**Folder**

<code><pre>
src
│
├── layouts
│   └── MainLayout.jsx
</pre></code>

`MainLayout.jsx`

<code><pre>
import { Outlet } from "react-router-dom";
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";

function MainLayout() {
  return (
    &lt;&gt;
      &lt;Navbar /&gt;
      &lt;main>
        &lt;Outlet /&gt;
      &lt;/main>
      &lt;Footer /&gt;
    &lt;/&gt;
  );
}

export default MainLayout;
</pre></code>

## 3. Outlet Kya Hai?

- `<Outlet />` ek placeholder hai.
- React jis page ko match karega usko yahin render karega.

**Flow**

<code><pre>
MainLayout
↓
Navbar
↓
`<Outlet />`
↓
Home
</pre></code>

**Ya**

<code><pre>
MainLayout
↓
Navbar
↓
`<Outlet />`
↓
Home
</pre></code>

**Ya**

<code><pre>
MainLayout
↓
Navbar
↓
`<Outlet />`
↓
Home
</pre></code>

## 4. Visual
<code><pre>
+-------------------+
| Navbar            |
+-------------------+

|  Outlet           |

↓

Home

or

About

or

Contact

+-------------------+
| Footer            |
+-------------------+
</pre></code>

## 5. Routing Setup

<code><pre>
import { Routes, Route } from "react-router-dom";

import MainLayout from "./layouts/MainLayout";

import Home from "./pages/Home";
import About from "./pages/About";
import Contact from "./pages/Contact";

function App() {
  return (
    <Routes>

      <Route path="/" element={<MainLayout />}>

        <Route index element={<Home />} />

        <Route path="about" element={<About />} />

        <Route path="contact" element={<Contact />} />

      </Route>

    </Routes>
  );
}

export default App;
</pre></code>

**Flow**

<code><pre>
URL
↓
/
↓
MainLayout
↓
Outlet
↓
Home
</pre></code>

**URL**

<code><pre>
/about
↓
MainLayout
↓
Outlet
↓
About
</pre></code>

## 6. index Route

**Instead of**

`<Route path="/" element={<Home />} />`

**Nested routes me likhte hain**

`<Route index element={<Home />} />`

Meaning

`Default Child Route`

## 7. Dashboard Example
<code><pre>
&lt;Route path="/dashboard" element={<DashboardLayout />}&gt;

  &lt;Route index element={<DashboardHome />} /&gt;

  &lt;Route path="users" element={<Users />} /&gt;

  &lt;Route path="orders" element={<Orders />} /&gt;

  &lt;Route path="settings" element={<Settings />} /&gt;

&lt;/Route>
</pre></code>

## 8. Nested Navigation
- Navbar
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

**Dashboard Sidebar**

<code><pre>
&lt;Link to="/dashboard">Home&lt;/Link&gt;

&lt;Link to="/dashboard/users"&gt;
  Users
&lt;/Link>

&lt;Link to="/dashboard/orders"&gt;
  Orders
&lt;/Link>

&lt;Link to="/dashboard/settings"&gt;
  Settings
&lt;/Link&gt;

</pre></code>

## Interview Questions

**Q1. `<Outlet />` kya hai?**
- Nested child route render karne ki placeholder.

**Q2. Layout Component kyu banate hain?**
- Common UI (Navbar, Footer, Sidebar) ko reuse karne ke liye.

**Q3. index route kya hota hai?**
- Default child route.

**Q4. Nested Route ka benefit?**
- Clean URLs aur reusable layouts.
